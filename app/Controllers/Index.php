<?php

namespace App\Controllers;
use App\Models\usuariosModel;

class Index extends BaseController
{
    public function index()
    {
        return view('index');
    }

}