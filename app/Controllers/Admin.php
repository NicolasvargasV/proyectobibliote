<?php

namespace App\Controllers;
use App\Models\tipousuarioModel;
use App\Models\usuariosModel;
use App\Models\UserModel;
use App\Models\libros_apoyoModel;
use App\Models\guiasModel;
use App\Models\Controller;
use App\Models\controlesModel;
use App\Models\usuarios;
use CodeIgniter\Files\File;

class Admin extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $MiObjeto = new tipousuarioModel ($db);
        $data=array(
        'nombre'=> $this->request->getPost('nombre'),
        'descripcion'=> $this->request->getPost('descripcion'),
        'estado'=> $this->request->getPost('estado')
        );
    
        $MiObjeto->insert($data);
        $users= $MiObjeto->findAll();

        $data['Listatipousuario'] = $users;
        return view ('admin/perfilAdmin', $data);
        
    }
}