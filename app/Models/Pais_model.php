<?php
use \CodeIgniter\Model;

class Pais_model extends Model
{
    protected $table = 'paises';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['codigo', 'nombre', 'estado', 'deleted'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';

    protected $skipValidation = false;
}