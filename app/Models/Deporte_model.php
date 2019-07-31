<?php
use \CodeIgniter\Model;

class Deporte_model extends Model
{
    protected $table = 'deportes';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'estado', 'deleted'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';

    protected $skipValidation = false;
}