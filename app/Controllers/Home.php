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
        return view ('usuarios/insertarDato', $data);
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
        'fechaNac'=> $this->request->getPost('fechaNac'),
        'nombres'=> $this->request->getPost('nombres'),
        'Apaterno'=> $this->request->getPost('Apaterno'),
        'Amaterno'=> $this->request->getPost('Amaterno'),
        'email'=> $this->request->getPost('email')
        
        
     );

    $MiObjeto->insert($data);
    $users= $MiObjeto->findAll();
    $data['ListaUsuario'] = $users;
    return view ('usuarios/registrarUsuario', $data);

    }

    public function borrarUsuario(){

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
    $users= $MiObjeto->findAll();
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
    $users= $MiObjeto->findAll();
    $data['Listaguia'] = $users;
    return view ('usuarios/registrarguia', $data);

    }


    public function agregar_control()
    {
        $db = \Config\Database::connect();
        $MiObjeto= new controlesModel($db);
        $users= $MiObjeto->findAll();
        $data['Listacontrol'] = $users;

        return view('usuarios/registrarcontrol', $data);
    }

    public function nuevocontrol()
    {
        $db = \Config\Database::connect();  
        $MiObjeto = new controlesModel($db); 
        
     $data=array(   
        'nombre_control'=> $this->request->getPost('nombre_control'),
        'asignatura_control'=> $this->request->getPost('asignatura_control'),
        'grado_control'=> $this->request->getPost('grado_control'),
          
     );


    $MiObjeto->insert($data);
    $users= $MiObjeto->findAll();
    $data['Listacontrol'] = $users;
    return view ('usuarios/registrarcontrol', $data);

    }








    public function basedatos()
    {
        $db = \Config\Database::connect();
        $MiObjeto = new usuariosModel($db);
        $users = $MiObjeto->findAll();
        $data['listaTiposUsuarios'] = $users;
        return view('Usuarios/index',$data);
    }




    public function logout()
    {
        session_destroy();
        return redirect()->to('/app/Controllers/Index');
    }   










//borrar usuario


    
    public function borrarUsuarios($id_usuario=null){
    
        $session = session();
         
            $item = new usuariosModel();
            $datos = $item->where('id_usuario',$id_usuario)->first();
            $item->where('id_usuario',$id_usuario)->delete($id_usuario);
            return $this->response->redirect(site_url('Home/agregar_usuario'));
        
            return $this->response->redirect(site_url('Home/agregar_usuario'));
       
            //echo "Borrar registro".$id_usuario;
    
        }





















}
