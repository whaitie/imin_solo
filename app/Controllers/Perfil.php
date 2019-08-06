<?php namespace App\Controllers;

use CodeIgniter\Controller;


class Perfil extends BaseController
{
    public function index(){

        if($this->request->isAJAX()){
            $this->failUnauthorized('No puedes acceder via AJAX aqui');
        }
        else {/*
            if (!session()->has('ingresado')) {
                return redirect()->to('/');
            } else {*/
                $this->web_view(array('seccion' => 'perfil'));
            //}
        }
    }
}