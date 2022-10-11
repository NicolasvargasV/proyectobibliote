<?php

namespace App\Models;

use CodeIgniter\Model;

class libros_apoyoModel extends Model
{
    protected $table      = 'libros_apoyo';
    protected $primaryKey = 'cod_lib';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    

    protected $allowedFields = ['Nombre_lib', 'Autor_lib','Genero_lib ','resumen_lib'];


    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $validationRules    = [];
    protected $validationMessages = [];


    
    protected $skipValidation     = true;
}