<?php

namespace App\Controllers;
use App\Models\usuariosModel;

class Login extends BaseController
{
    public function __construct(){
        helper('url');
    }
    public function hola()
    {
        return view('login');
    }
}