<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Publicaciones extends BaseController
{
    public function index()
    {
        if($this->request->isAJAX()){
            $this->failUnauthorized('No puedes acceder via AJAX aqui');
        } else {
            if (session()->has('ingresado')) {
                $this->web_view(array('seccion' => 'publicar'));
            } else {
                return redirect()->to('/');
            }
        }
    }
}