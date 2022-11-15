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

    protected $skipValidation     = false;

    protected $validationRules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'estado' => 'required'
    ];

    protected $validationMessages =[
        'nombreAutor' =>['required'=>'debe ingresar un valor'],
        'descripcion'=>['required'=>'Ingrese descripcion'],
            'estado'=>['required'=>'Ingrese descripcion']
    ];
    
}