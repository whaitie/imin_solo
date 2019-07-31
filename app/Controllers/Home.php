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
            	return redirect()->to('/app');
            } else {
                $this->web_view(array('seccion' => 'home'));
            }
        }
	}

    public function app()
    {
        if($this->request->isAJAX()){
            $this->failUnauthorized('No puedes acceder via AJAX aqui');
        } else {
            if (!session()->has('ingresado')) {
                return redirect()->to('/');
            } else {
                $this->web_view(array('seccion' => 'app'));
            }
        }
    }

    public function perfil($username)
    {
        if($this->request->isAJAX()){
            $this->failUnauthorized('No puedes acceder via AJAX aqui');
        } else {
            if (!session()->has('ingresado')) {
                return redirect()->to('/');
            } else {
                $this->web_view(array('seccion' => 'perfil'));
            }
        }
    }

    public function register() {

        if($this->request->isAJAX()){
            $data = $this->request->getPost();

            $validation = \Config\Services::validation();
            $validation->setRules([
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
                'email' => 'required|valid_email|is_unique[usuarios.email]',
                'usuario' => 'required|is_unique[usuarios.usuario]',
                'password' => 'required',
                'confirm_password' => 'required|matches[password]',
            ]);

            if (!$validation->withRequest($this->request)->run()){
                $this->rAJAX($validation->getErrors(), 300, 'Error');
            } else {
                $users = new \Usuario_model();
                $usuario = $users->insertar_usuario($data);

                if (!$usuario){
                    $this->rAJAX($users->errors(), 300, 'Error');
                } else {
                    $this->rAJAX(array('id' => $usuario, 'email' => $data['email'], 'usuario' => $data['usuario'], 'password' => $data['password'], 'mensaje' => 'Usuario Registrado'));
                }
            }
        } else {
                return redirect()->to('/');
        }
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
