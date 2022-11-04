<?php

namespace App\Models;

use CodeIgniter\Model;

class usuariosModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id_usuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    

    protected $allowedFields = ['rut_Usuario','fechaNac','nombres','Apaterno','Amaterno','email'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $validationRules    = [];
    protected $validationMessages = [];


    
    protected $skipValidation     = true;
}