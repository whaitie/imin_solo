<?php
use \CodeIgniter\Model;

class Perfil_model extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'usuario', 'password', 'email', 'nombre', 'apellido', 'dni', 'avatar',
        'cuerpo_completo','presentacion','presentacion_likes','presentacion_visitas','video','genero', 'fecha_nacimiento',
        'id_pais_nac', 'id_pais_res','provincia','ciudad', 'calle', 'numero','verificado', 'id_deporte',
        'tipo_cuenta', 'estado','verificado','altura','peso','liga','club','goles','partidos','ultimo_logueo'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';

    protected $skipValidation = false;

    public function data_cookie($id , $username){
        $query = $this->select('ultimo_logueo')->Where('usuario', $username)->Where('id', $id)->first();
        return $query;
    }

    public function update_generico($id , $campo, $img){
        $query = $this->update($id, array($campo => $img));
        return $query;
    }

}