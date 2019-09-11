<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends BaseController
{
	public function index()
	{
        if($this->request->isAJAX()){
            $this->failUnauthorized('No puedes acceder via AJAX aqui');
        } else {
            if (session()->has('ingresado')) {
            	return redirect()->to('/miperfil');
            } else {
                $this->web_view(array('seccion' => 'home'));
            }
        }
	}

    function getB64Type($str) {
        // $str should start with 'data:' (= 5 characters long!)
        return substr($str, 5, strpos($str, ';')-5);
    }

    public function registrar_usuario() {

        if($this->request->isAJAX()){
            $data = $this->request->getPost();

            $validation = \Config\Services::validation();
            $validation->setRules([
                'avatar' => 'required',
                'nombre' => 'required',
                'apellido' => 'required',
                'dni' => 'required',
                'fecha_nacimiento' => 'required',
                'genero' => 'required',
                'id_deporte' => 'required',
                'id_pais_nac' => 'required',
                'tipo_cuenta' => 'required',
                'id_pais_res' => 'required',
                'provincia' => 'required',
                'calle' => 'required',
                'numero' => 'required',
                'altura' => 'required',
                'peso' => 'required',
                'email' => 'required|valid_email|is_unique[usuarios.email]',
                'usuario' => 'required|is_unique[usuarios.usuario]',
                'password' => 'required',
                'confirm_password' => 'required|matches[password]',
            ]);

            if (!$validation->withRequest($this->request)->run()){
                $this->rAJAX($validation->getErrors(), 300, 'Error');
            } else {

                if( strlen($data['avatar']) > 22){
                    $data['avatar'] = $this->procesarImagen($data);
                }

                $users = new \Usuario_model();
                $usuario = $users->insertar_usuario($data);

                if (!$usuario){
                    $this->rAJAX($users->errors(), 300, 'Error');
                } else {
                    //$this->rAJAX(array('mensaje' => 'Usuario Registrado'));
                    $this->rAJAX(array('id' => $usuario, 'email' => $data['email'], 'usuario' => $data['usuario'], 'password' => $data['password'], 'mensaje' => 'Usuario Registrado'));
                }
            }
        } else {
                return redirect()->to('/');
        }
    }

    public function procesarImagen($_data){

        $img = $_data['avatar'];
        $carpeta_usuario = getcwd().'/img/avatar/';

        if(!is_dir($carpeta_usuario))
            mkdir($carpeta_usuario,0777,true);

        $header = substr($img , 0,22);
        $formato = "";
        $file = "img/no-profile.png";

        if(strpos($header , 'png')){
            $formato = 'png';
        }
        else if(strpos($header , 'jpeg') || strpos($header , 'jpg') ){
            $formato = 'jpg';
        }
        else if(strpos($header , 'gif')){
            $formato = 'gif';
        }
        else{
            $this->rAJAX('El formato de la imagen es invalido.Solo se admite JPG, PNG y GIF', 300, 'Error');
        }

        switch ($formato){
            case 'jpg':
                $img = str_replace('data:image/jpeg;base64,', '', $img);
                $img = str_replace(' ', '+', $img);
                $data = base64_decode($img);
                $file = $carpeta_usuario . uniqid() . '.jpg' ;
                $success = file_put_contents($file, $data);
                if(!$success){
                    $this->rAJAX('La imagen no pudo ser procesada, intentelo nuevamente, o cambie la imagen.', 300, 'Error');
                }
                break;
            case 'png':
                $img = str_replace('data:image/png;base64,', '', $img);
                $img = str_replace(' ', '+', $img);
                $data = base64_decode($img);
                $file = $carpeta_usuario . uniqid() . '.png' ;
                $success = file_put_contents($file, $data);
                if(!$success){
                    $this->rAJAX('La imagen no pudo ser procesada, intentelo nuevamente, o cambie la imagen.', 300, 'Error');
                }
                break;
            case 'gif':
                $img = str_replace('data:image/gif;base64,', '', $img);
                $img = str_replace(' ', '+', $img);
                $data = base64_decode($img);
                $file = $carpeta_usuario . uniqid() . '.gif' ;
                $success = file_put_contents($file, $data);
                if(!$success){
                    $this->rAJAX('La imagen no pudo ser procesada, intentelo nuevamente, o cambie la imagen.', 300, 'Error');
                }
                break;
        }

        $file = substr($file, 59, strlen($file) - 1);
        return $file;
    }

    public function deportes(){
        if($this->request->isAJAX()){
            $deportes = New \Deporte_model();
            $data = $deportes->select('id, nombre')->orderBy('nombre')->where(['deleted' => 0, 'estado' => 1])->findAll();

            $this->rAJAX($data);
        } else {
			return redirect()->to('/');
        }
    }

    public function deportes2(){
        $deportes = New \Deporte_model();
        $data = $deportes->select('id, nombre')->orderBy('nombre')->where(['deleted' => 0, 'estado' => 1])->findAll();

        $this->rAJAX($data);
    }

    public function paises(){
        if($this->request->isAJAX()){
            $paises = New \Pais_model();
            $data = $paises->select('id, nombre')->orderBy('nombre')->where(['deleted' => 0, 'estado' => 1])->findAll();

            $this->rAJAX($data);
        } else {
			return redirect()->to('/');
        }
    }


}
