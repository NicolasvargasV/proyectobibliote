<?php

namespace App\Models;

use CodeIgniter\Model;

class login extends Model
{
    protected $table = 'login';
    protected $allowedFields = ['nombre_completo','correo','usuario', 'contrasena'];
}