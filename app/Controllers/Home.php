<?php

namespace App\Controllers;
use App\Models\tipousuarioModel;
use App\Models\usuariosModel;
use App\Models\UserModel;
use App\Models\libros_apoyoModel;
use App\Models\guiasModel;



class Home extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $miObjeto= new tipousuarioModel($db);
        $users= $miObjeto->find([1,2]);
        print_r($users);

        $data['Listatipousuario'] = $users;
        return view('welcome_message', $data);
    }



    public function saludos()
    {
        $db = \Config\Database::connect();
        $miObjeto= new tipousuarioModel($db);

        $data =[
            'nombre'=>'test1',
            'descripcion'=> 'd.vader@thereempire.com',
            'estado'=>'1',
        ];
        $users= $miObjeto->findAll();
        //print_r($users);

        $data['Listatipousuario'] = $users;
        return view('usuarios/index', $data);
    }



    public function InsertaDato()
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
    return view ('usuarios/index', $data) ;

    }



    //Agregar
    public function agregar_usuario()
    {
        $db = \Config\Database::connect();
        $miObjeto= new usuariosModel($db);
        $users= $miObjeto->findAll();
        $data['ListaUsuario'] = $users;
        return view('usuarios/registrarUsuario', $data);
    }


    public function nuevoUsuario()
    {
        $db = \Config\Database::connect();  
        $MiObjeto = new usuariosModel($db); 
   
    
     $data=array(   
    
        'id_usuario'=> $this->request->getPost('id_usuario'),
        'rut_Usuario'=> $this->request->getPost('rut_Usuario'),
        'id_tipoUsuario'=> $this->request->getPost('id_tipoUsuario'),
        'fechaNac'=> $this->request->getPost('fechaNac'),
        'Apaterno'=> $this->request->getPost('Apaterno'),
        'Amaterno'=> $this->request->getPost('Amaterno'),
        'email'=> $this->request->getPost('email')
        
     );

    $MiObjeto->insert($data);
    print_r(  $MiObjeto->errors());
    $users= $MiObjeto->findAll();
 
    print_r($users);
    $data['ListaUsuario'] = $users;
    return view ('usuarios/registrarUsuario', $data);

    }


    public function agregar_libro()
    {
        $db = \Config\Database::connect();
        $MiObjeto= new libros_apoyoModel($db);
        $users= $MiObjeto->findAll();
        $data['Listalibro'] = $users;

        return view('usuarios/registrarlibro', $data);
    }

    public function nuevolibro()
    {
        $db = \Config\Database::connect();  
        $MiObjeto = new libros_apoyoModel($db); 
      
     $data=array(   
        'Nombre_lib'=> $this->request->getPost('Nombre_lib'),
        'Autor_lib'=> $this->request->getPost('Autor_lib'),
        'Genero_lib'=> $this->request->getPost('Genero_lib'),
        'resumen_lib'=> $this->request->getPost('resumen_lib'),  
     );


    $MiObjeto->insert($data);
    print_r(  $MiObjeto->errors());
    $users= $MiObjeto->findAll();
 
    print_r($users);
    $data['Listalibro'] = $users;
    return view ('usuarios/registrarlibro', $data);

    }



public function agregar_guia()
    {
        $db = \Config\Database::connect();
        $MiObjeto= new guiasModel($db);
        $users= $MiObjeto->findAll();
        $data['Listaguia'] = $users;
        
        return view('usuarios/registrarguia', $data);
    }

    public function nuevaguia()
    {
        $db = \Config\Database::connect();  
        $MiObjeto = new guiasModel($db); 
   
        
     $data=array(   
        
        'nombre_guia'=> $this->request->getPost('nombre_guia'),
        'tipo_guia'=> $this->request->getPost('tipo_guia'),
        'link_vid_guia'=> $this->request->getPost('link_vid_guia')
          
     );


    $MiObjeto->insert($data);
    print_r(  $MiObjeto->errors());
    $users= $MiObjeto->findAll();

    print_r($users);
    $data['Listaguia'] = $users;
    return view ('usuarios/registrarguia', $data);

    }





    public function basedatos()
    {
        $db = \Config\Database::connect();
        $MiObjeto = new usuariosModel($db);
        $users = $MiObjeto->findAll();
        $data['listaTiposUsuarios'] = $users;
        return view('Usuarios/index',$data);
    }













}
