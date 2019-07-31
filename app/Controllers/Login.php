<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;

class Login extends BaseController
{
    public function login(){
        if($this->request->isAJAX()){
            $data = $this->request->getPost();

            $validation = \Config\Services::validation();
            $validation->setRules([
                'usuario' => 'required',
                'password' => 'required',
            ]);

            if (!$validation->withRequest($this->request)->run()){
                $this->rAJAX($validation->getErrors(), 300, 'Error');
            } else {
                $users = new \Usuario_model();
                $usuario = $users->login_usuario($data['usuario']);

                if (count($usuario) == 0){
                    $this->rAJAX('Usuario Inválido', 300, 'Error');
                } else {
                    if ($usuario['estado'] == 0){
                        $this->rAJAX('Usuario Bloqueado', 300, 'Error');
                    } else if (!password_verify($data['password'], $usuario['password'])){
                        $this->rAJAX('Contraseña Incorrecta', 300, 'Error');
                    } else {
                        $datos_cookie = $users->data_cookie($data['usuario']);
                        $datos_cookie['ingresado'] = TRUE;
                        $datos_cookie['admin'] = FALSE;
                        $datos_cookie['avatar'] = base_url('getAvatar/'.$datos_cookie['usuario'].'/'.$datos_cookie['id']);
                        session()->set($datos_cookie);

                    if (isset($data['recordar'])) {
                        set_cookie(array('name' => 'id', 'value' => $datos_cookie['id'], 'expire' => (86400 * 30), 'secure' => false));
                        set_cookie(array('name' => 'usuario', 'value' => $datos_cookie['usuario'], 'expire' => (86400 * 30), 'secure' => false));
                        set_cookie(array('name' => 'email', 'value' => $datos_cookie['email'],' expire' => (86400 * 30), 'secure' => false));
                        set_cookie(array('name' => 'nombre', 'value' => $datos_cookie['nombre'], 'expire' => (86400 * 30), 'secure' => false));
                        set_cookie(array('name' => 'avatar', 'value' => $datos_cookie['avatar'], 'expire' => (86400 * 30), 'secure' => false));
                        set_cookie(array('name' => 'genero', 'value' => $datos_cookie['genero'], 'expire' => (86400 * 30), 'secure' => false));
                        set_cookie(array('name' => 'fecha_nacimiento', 'value' => $datos_cookie['fecha_nacimiento'], 'expire' => (86400 * 30),'secure' => false));
                        set_cookie(array('name' => 'ultimo_logueo', 'value' => $datos_cookie['ultimo_logueo'], 'expire' => (86400 * 30), 'secure' => false));
                        set_cookie(array('name' => 'ingresado', 'value' => $datos_cookie['ingresado'], 'expire' => (86400 * 30), 'secure' => false));
                        set_cookie(array('name' => 'admin', 'value' => $datos_cookie['admin'], 'expire' => (86400 * 30), 'secure' => false));
                    }

                        $users->ultimo_logueo($datos_cookie['id']);

                        $this->rAJAX('Usuario Logueado');
                    }
                }
            }
        }
        else{
            return redirect()->to('/');
        }
    }

    public function logout(){
        if($this->request->isAJAX()){
            $this->failUnauthorized('No puedes acceder via AJAX aqui');
        } else {
            if(session()->has('ingresado')){
                session()->destroy();
                session()->start();
                session()->regenerate();
            }
            return redirect()->to('/');
        }
    }

    public function recuperar(){
        if($this->request->isAJAX()){
            $data = $this->request->getPost();

            $validation = \Config\Services::validation();
            $validation->setRules([
                'usuario' => 'required',
                'password' => 'required',
                'confirm_password' => 'required|matches[password]',
            ]);

            if (!$validation->withRequest($this->request)->run()){
                $this->rAJAX($validation->getErrors(), 300, 'Error');
            } else {
                $users = new \Usuario_model();
                $usuario = $users->login_usuario($data['usuario']);

                if (count($usuario) == 0){
                    $this->rAJAX(lang('diccionario.usuario_invalido'), 300, 'Error');
                } else {
                    if ($usuario['estado'] == 0){
                        $this->rAJAX(lang('diccionario.usuario_bloqueado'), 300, 'Error');
                    } else {
                        $datos = $users->data_usuario($data['usuario']);

                        $password_token = bin2hex(random_bytes(16));
                        $email = $datos['email'];

                        $cambio = new \CambioPassword_model();

                        $data_query = array(
                            'id_usuario' => $datos['id'],
                            'token' => $password_token,
                            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
                            );

                        $verifica = $cambio->verificar($datos['id']);
                        if (count($verifica) == 0){
                            $cambio->insert($data_query);
                        } else {
                            $data_query['estado'] = '0';
                            $cambio->update($verifica[0]['id'], $data_query);
                        }

                        $variables = array();
                        $variables['password_token'] = $password_token;
                        $variables['email'] = $email;
                        $variables['admin'] = 'Administrador';
                        $variables['admin_email'] = 'admin@animewtf.com';
                        $variables['url'] = base_url('resetpassword/'.$password_token.'/'.$email);

                        $url =  APPPATH.'/Views/email_template.html';
                        $template = file_get_contents($url);

                        foreach($variables as $key => $value) {
                            $template = str_replace('{{ '.$key.' }}', $value, $template);
                        }

                        $titulo = 'Anime WTF '.lang('diccionario.cambio_password');
                        $header = "X-Priority: 3\r\n";
                        $header .= "X-Mailer: PHP/" . phpversion() . '\r\n';
                        $header .= "MIME-Version: 1.0\r\n";
                        $header .= "From: noreply@animewtf.com\r\n";
                        $header .= "Reply-To: noreply@animewtf.com\r\n";
                        $header .= "Return-Path: noreply@animewtf.com\r\n";
                        $header .= "Content-type: text/html; charset=UTF-8\r\n";

                        mail($email, $titulo, $template, $header);

                        $this->rAJAX(lang('diccionario.password_enviado'));
                    }
                }
            }
        }
        else{
            return redirect()->to('/');
        }
    }

    public function actualizar_password($token, $email){
        if($this->request->isAJAX()){
            $this->failUnauthorized('No puedes acceder via AJAX aqui');
        } else {
            if (!empty($token) && !empty($email)){
                $cambio = new \CambioPassword_model();
                $verifica = $cambio->select('u.id, cambio_password.password')
                                ->join('usuarios u', 'u.id = cambio_password.id_usuario', 'left')
                                ->where(['cambio_password.token' => $token, 'u.email' => $email, 'cambio_password.estado' => 0])
                                ->findAll();

                if (count($verifica) > 0){
                    $usuarios = new \Usuario_model();
                    $usuarios->update($verifica[0]['id'], ['password' => $verifica[0]['password']]);

                    $cambio->update($verifica[0]['id'], ['estado' => 1]);

                    $cabecera = lang('diccionario.hecho');
                    $mensaje = lang('diccionario.password_actualizado');
                    $estilo = 'success';

                } else {
                    $cabecera = 'Error';
                    $mensaje = lang('diccionario.datos_incorrectos');
                    $estilo = 'error';
                }

            } else {
                $cabecera = 'Error';
                $mensaje = lang('diccionario.datos_incorrectos');
                $estilo = 'error';
            }
        }

        return '<html>
                <head>
                <link rel="stylesheet" href="'.base_url('plugins/sweetalert/sweetalert.css').'" />
                </head>
                <body bgcolor="#292929">
                <script type="application/javascript" src="'.base_url('plugins/sweetalert/sweetalert.min.js').'"></script>
                <script type="text/javascript">
                function callSweetMsg() {
                        swal({
                        title: \''.$cabecera.'!\',
                        text: \''.$mensaje.'\',
                        type: \''.$estilo.'\',
                    }, function(){
                        location.href = \''.base_url().'\';
                    });
                }
                callSweetMsg();
                </script>
                </body>
                </html>';
    }
}