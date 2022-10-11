<?php

namespace App\Models;

use CodeIgniter\Model;

class tipousuarioModel extends Model
{
    protected $table      = 'tipousuario';
    protected $primaryKey = 'id_tipoUsuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    

    protected $allowedFields = ['nombre', 'descripcion','estado'];


    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $validationRules    = [];
    protected $validationMessages = [];

    protected $skipValidation     = false;


    
}