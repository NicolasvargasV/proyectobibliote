<?php

namespace App\Controllers;
use App\Models\usuariosModel;

class correo extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();  
        $MiObjeto = new usuariosModel($db); 
   
    
         $data=array(
            'nombres'=> $this->request->getPost('nombres'),
        );
        $MiObjeto->insert($data);
        $users= $MiObjeto->findAll();
        $data['ListaUsuario'] = $users;
        return view('pag_correo');
        
    }
}