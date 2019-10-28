<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Perfil extends ProcesarImagenes
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

    public function fotoCuerpoCompleto(){
        if($this->request->isAJAX()){
            $data = $this->request->getPost();

            $cookie['id'] = session()->get('id');
            $cookie['user'] = session()->get('usuario');

            $PM = new \Perfil_model();

            $rta['usuario_valido'] =  $PM->data_cookie($cookie['id'], $cookie['user']);

            if($rta['usuario_valido'] != NULL){
                $data['ruta'] = '/img/cuerpoCompleto/';
                $rta['img_procesada'] = $this->ProcesarIMGB64($data);

                if($rta == FALSE){
                    $this->rAJAX('Ocurrio un error al procesar la imagen, por favor intentalo nuevamente, si el error persiste, elige otra imagen.<br>Si el problema persiste comuniquese con un administrador ', 300, 'Error');
                }

                $rta['update_tabla'] = $PM->update_generico($cookie['id'],'cuerpo_completo', $rta['img_procesada']);

                if($rta['update_tabla'] == TRUE){
                    //$this->rAJAX('error provocado', 300, 'Error');
                    $this->rAJAX(array('mensaje' => 'Imagen actualizada correctamente.'));
                }
                else{
                    $this->rAJAX('Ocurrio un error al actualizar la DB, intentalo nuevamente, si el problema persiste contacta a un administrador', 300, 'Error');
                }
            }
            else{
                $this->rAJAX('El usuario es incorrecto, la sesion expiro, o algun dato esta corrupto, ingresa nuevamente e intentalo nuevamente.', 300, 'Error');
            }
        }
        else {
            echo "no puedes acceder aqui";
        }
    }

    public function fotoPresentacion(){
        if($this->request->isAJAX()){
            $data = $this->request->getPost();

            $cookie['id'] = session()->get('id');
            $cookie['user'] = session()->get('usuario');

            $PM = new \Perfil_model();

            $rta['usuario_valido'] =  $PM->data_cookie($cookie['id'], $cookie['user']);

            if($rta['usuario_valido'] != NULL){
                $data['ruta'] = '/img/fotoPresentacion/';
                $rta['img_procesada'] = $this->ProcesarIMGB64($data);

                if($rta == FALSE){
                    $this->rAJAX('Ocurrio un error al procesar la imagen, por favor intentalo nuevamente, si el error persiste, elige otra imagen.<br>Si el problema persiste comuniquese con un administrador ', 300, 'Error');
                }

                $rta['update_tabla'] = $PM->update_generico($cookie['id'],'cuerpo_medio', $rta['img_procesada']);

                $rta['mensaje'] = 'Imagen actualizada correctamente.';

                if($rta['update_tabla'] == TRUE){
                    //$this->rAJAX('error provocado', 300, 'Error');
                    $this->rAJAX($rta);
                }
                else{
                    $this->rAJAX('Ocurrio un error al actualizar la DB, intentalo nuevamente, si el problema persiste contacta a un administrador', 300, 'Error');
                }
            }
            else{
                $this->rAJAX('El usuario es incorrecto, la sesion expiro, o algun dato esta corrupto, ingresa nuevamente e intentalo nuevamente.', 300, 'Error');
            }
        }
        else {
            echo "no puedes acceder aqui";
        }
    }

    public function fotoAvatar(){
        if($this->request->isAJAX()){
            $data = $this->request->getPost();

            $cookie['id'] = session()->get('id');
            $cookie['user'] = session()->get('usuario');

            $PM = new \Perfil_model();

            $rta['usuario_valido'] =  $PM->data_cookie($cookie['id'], $cookie['user']);

            if($rta['usuario_valido'] != NULL){
                $data['ruta'] = '/img/avatar/';
                $rta['img_procesada'] = $this->ProcesarIMGB64($data);

                if($rta == FALSE){
                    $this->rAJAX('Ocurrio un error al procesar la imagen, por favor intentalo nuevamente, si el error persiste, elige otra imagen.<br>Si el problema persiste comuniquese con un administrador ', 300, 'Error');
                }

                $rta['update_tabla'] = $PM->update_generico($cookie['id'],'avatar', $rta['img_procesada']);

                if($rta['update_tabla'] == TRUE){
                    //$this->rAJAX('error provocado', 300, 'Error');
                    $this->rAJAX(array('mensaje' => 'Imagen actualizada correctamente.'));
                }
                else{
                    $this->rAJAX('Ocurrio un error al actualizar la DB, intentalo nuevamente, si el problema persiste contacta a un administrador', 300, 'Error');
                }
            }
            else{
                $this->rAJAX('El usuario es incorrecto, la sesion expiro, o algun dato esta corrupto, ingresa nuevamente e intentalo nuevamente.', 300, 'Error');
            }
        }
        else {
            echo "no puedes acceder aqui";
        }
    }

    public function descripcionPerfil(){
        if($this->request->isAJAX()){
            $data = $this->request->getPost();

            $cookie['id'] = session()->get('id');
            $cookie['user'] = session()->get('usuario');

            $PM = new \Perfil_model();

            $rta['usuario_valido'] =  $PM->data_cookie($cookie['id'], $cookie['user']);

            if($rta['usuario_valido'] != NULL){

                $rta['update_tabla'] = $PM->update_generico($cookie['id'],'presentacion', $data['descripcion']);

                if($rta['update_tabla'] == TRUE){
                    //$this->rAJAX('error provocado', 300, 'Error');
                    $this->rAJAX(array('mensaje' => 'Presentación actualizada correctamente.'));
                }
                else{
                    $this->rAJAX('Ocurrio un error al actualizar la DB, intentalo nuevamente, si el problema persiste contacta a un administrador', 300, 'Error');
                }
            }
            else{
                $this->rAJAX('El usuario es incorrecto, la sesion expiro, o algun dato esta corrupto, ingresa nuevamente e intentalo nuevamente.', 300, 'Error');
            }
        }
        else {
            echo "no puedes acceder aqui";
        }
    }

    public function videoPresentacion(){
        if($this->request->isAJAX()){
            // error , name , size, tmp_name, type
            $files = $_FILES;
            $files2 = [];
            foreach ($files as $input => $infoArr) {
                $filesByInput = [];
                foreach ($infoArr as $key => $valueArr) {
                    if (is_array($valueArr)) { // file input "multiple"
                        foreach($valueArr as $i=>$value) {
                            $filesByInput[$i][$key] = $value;
                        }
                    }
                    else { // -> string, normal file input
                        $filesByInput[] = $infoArr;
                        break;
                    }
                }
                $files2 = array_merge($files2,$filesByInput);
            }
            $files3 = [];
            foreach($files2 as $file) { // let's filter empty & errors
                if (!$file['error']) $files3[] = $file;
            }

            $this->rAJAX($files3);
            /*
            $cookie['id'] = session()->get('id');
            $cookie['user'] = session()->get('usuario');

            $PM = new \Perfil_model();

            $rta['usuario_valido'] =  $PM->data_cookie($cookie['id'], $cookie['user']);

            if($rta['usuario_valido'] != NULL){
                $data['ruta'] = '/video/presentacion/';
                $video = $data['video'];
                $carpeta_usuario = getcwd().$data['ruta'];

                if(!is_dir($carpeta_usuario))
                    mkdir($carpeta_usuario,0777,true);

                $nombre_video = uniqid() . '.mp4';
                $file = $carpeta_usuario . $nombre_video;
                $success = file_put_contents($file, $video);

                if(!$success){
                    $this->rAJAX('Ocurrio un error al procesar el video, por favor intentalo nuevamente, si el error persiste, elige otra video.<br>Si el problema persiste comuniquese con un administrador ', 300, 'Error');
                }

                $rta['update_tabla'] = $PM->update_generico($cookie['id'],'presentacion', $data['descripcion']);

                if($rta['update_tabla'] == TRUE){
                    //$this->rAJAX('error provocado', 300, 'Error');
                    $this->rAJAX(array('mensaje' => 'Video Presentación actualizada correctamente.'));
                }
                else{
                    $this->rAJAX('Ocurrio un error al actualizar la DB, intentalo nuevamente, si el problema persiste contacta a un administrador', 300, 'Error');
                }
            }
            else{
                $this->rAJAX('El usuario es incorrecto, la sesion expiro, o algun dato esta corrupto, ingresa nuevamente e intentalo nuevamente.', 300, 'Error');
            }*/
        }
        else {
            echo "no puedes acceder aqui";
        }
    }
}