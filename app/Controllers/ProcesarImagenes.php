<?php namespace App\Controllers;

use CodeIgniter\Controller;

class ProcesarImagenes extends BaseController
{
    public function ProcesarIMGB64($_data){
        $img = $_data['img'];
        $carpeta_usuario = getcwd().$_data['ruta'];

        if(!is_dir($carpeta_usuario))
            mkdir($carpeta_usuario,0777,true);

        $header = substr($img , 0,22);
        $formato = "";
        $nombre_imagen = uniqid();
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
            return FALSE;
        }

        switch ($formato){
            case 'jpg':
                $img = str_replace('data:image/jpeg;base64,', '', $img);
                $img = str_replace(' ', '+', $img);
                $data = base64_decode($img);
                $nombre_imagen = $nombre_imagen . '.jpg';
                $file = $carpeta_usuario . $nombre_imagen;
                $success = file_put_contents($file, $data);
                if(!$success){return FALSE;}
                break;
            case 'png':
                $img = str_replace('data:image/png;base64,', '', $img);
                $img = str_replace(' ', '+', $img);
                $data = base64_decode($img);
                $nombre_imagen = $nombre_imagen. '.png';
                $file = $carpeta_usuario . $nombre_imagen  ;
                $success = file_put_contents($file, $data);
                if(!$success){return FALSE;}
                break;
            case 'gif':
                $img = str_replace('data:image/gif;base64,', '', $img);
                $img = str_replace(' ', '+', $img);
                $data = base64_decode($img);
                $nombre_imagen = $nombre_imagen. '.gif';
                $file = $carpeta_usuario . $nombre_imagen  ;
                $success = file_put_contents($file, $data);
                if(!$success){return FALSE;}
                break;
        }
        //$file = substr($file, 59, strlen($file) - 1);
        return substr($_data['ruta'],1,strlen($_data['ruta'])). $nombre_imagen;
    }
}