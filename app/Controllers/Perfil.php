<?php namespace App\Controllers;

use CodeIgniter\Controller;


class Perfil extends BaseController
{
    public function index($usuario){

        if($this->request->isAJAX()){
            $this->failUnauthorized('No puedes acceder via AJAX aqui');
        }
        else {
            $this->web_view(array('seccion' => 'perfil') );
        }
    }

    public function MiPerfil(){
        if($this->request->isAJAX()){
            $this->failUnauthorized('No puedes acceder via AJAX aqui');
        }
        else {
            $users = new \Usuario_model();
            $data = $users->data_usuario(session('usuario'));

            if(session('ingresado') == true && session('usuario') == $data['usuario']){
                $data['mi_perfil'] = true;
            }
            else{
                $data['mi_perfil'] = false;
            }

            if (!session()->has('ingresado') || $data['mi_perfil'] == false) {
                return redirect()->to('/');
            } else {
                return redirect()->to('/perfil/'.$data['usuario']);
            }
        }
    }

    public function DatosPerfil(){

        if($this->request->isAJAX()){
            $datos = $this->request->getPost();

            $usuario = $datos['usuario'];
            $users = new \Usuario_model();
            $data = $users->data_usuario($usuario);
            unset($data['password']);

            if(session('ingresado') == true && session('usuario') == $data['usuario']){
                $data['mi_perfil'] = true;
            }
            else{
                $data['mi_perfil'] = false;
            }

            if(!$data){
                $this->rAJAX('No existe un usuario con el nombre: '.$usuario, 300, 'Error');
            }

            $this->rAJAX($data);
        }
        else {
            return redirect()->to('/');
        }
    }

    public function DatosCookie(){
        foreach ($_SESSION as $key => $item){
            print ($key. ":".  $item . "<br>");
        }

    }
}