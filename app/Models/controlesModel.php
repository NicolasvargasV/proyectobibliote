<?php

namespace App\Models;

use CodeIgniter\Model;

class controlesModel extends Model
{
    protected $table      = 'controles';
    protected $primaryKey = 'Cod_control';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    

    protected $allowedFields = ['nombre_control', 'asignatura_control','grado_control'];


    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $validationRules    = [];
    protected $validationMessages = [];


    
    protected $skipValidation     = true;
}