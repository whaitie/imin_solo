<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Scout extends BaseController
{
    public function index(){

        if($this->request->isAJAX()){
            $this->failUnauthorized('No puedes acceder via AJAX aqui');
        }
        else {
            $this->web_view(array('seccion' => 'scout'));
        }
    }
}