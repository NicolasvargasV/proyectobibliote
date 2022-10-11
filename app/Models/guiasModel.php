<?php

namespace App\Models;

use CodeIgniter\Model;

class guiasModel extends Model
{
    protected $table      = 'guias';
    protected $primaryKey = 'cod_guia';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    

    protected $allowedFields = ['nombre_guia', 'tipo_guia','link_vid_guia '];


    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $validationRules    = [];
    protected $validationMessages = [];


    
    protected $skipValidation     = true;
}