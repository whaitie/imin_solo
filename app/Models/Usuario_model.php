<?php
use \CodeIgniter\Model;

class Usuario_model extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['usuario', 'password', 'email', 'nombre', 'apellido', 'dni', 'avatar', 'genero', 'fecha_nacimiento', 'id_pais_nac', 'id_pais_res', 'provincia', 'calle', 'numero', 'id_deporte', 'tipo_cuenta', 'estado', 'ultimo_logueo'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';

    protected $skipValidation = false;

    public function insertar_usuario($data){
        $datos = array(
            'usuario' => $data['usuario'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
            'email' => $data['email'],
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'dni' => $data['dni'],
            'avatar' => $data['avatar'],
            'genero' => $data['genero'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'id_pais_nac' => $data['id_pais_nac'],
            'id_pais_res' => $data['id_pais_res'],
            'provincia' => $data['provincia'],
            'calle' => $data['calle'],
            'numero' => $data['numero'],
            'id_deporte' => $data['id_deporte'],
            'tipo_cuenta' => $data['tipo_cuenta'],
            );

        $query = $this->insert($datos);
        if ($query) {
            return $this->insertID();
        } else {
            return $query;
        }
    }

    public function login_usuario($username){
        $query = $this->select('estado, password')->Where('deleted', 0)->Where('usuario', $username)->orWhere('email', $username)->first();
        return $query;
    }

    public function data_cookie($username){
        $query = $this->select('id, usuario, email, nombre, avatar, genero, fecha_nacimiento, ultimo_logueo')->Where('usuario', $username)->orWhere('email', $username)->first();
        return $query;
    }

    public function ultimo_logueo($id){
        $this->update($id, array('ultimo_logueo' => date('Y-m-d h:i:s')));
    }

    public function data_usuario($username){
        $query = $this->select('id, usuario, email, nombre')->Where('usuario', $username)->orWhere('email', $username)->first();
        return $query;
    }
}
