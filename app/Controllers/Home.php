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

class Home extends BaseController
{

    public function adminUsuarios()
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
        return view ('admin/usuariosAdmin', $data);
    }
    public function adminLibros()
    {
        $db = \Config\Database::connect();
        $MiObjeto= new libros_apoyoModel($db);
        $users= $MiObjeto->findAll();
        $data['Listalibro'] = $users;

        return view('admin/librosAdmin', $data);
    }
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

        if($model->replace($data)=== false){
             

        }
        
    }
    
    public function store(){
        helper(['form']);
        $validacion = [
            'nombre'          => 'required|min_length[2]|max_length[50]',
            'descripcion'         => 'required|min_length[4]|max_length[100]',
            'estado'      => 'required|min_length[4]'
        ];

        if($this->validate($validacion)){  
            $MiObjeto = new tipousuarioModel();
            $data = [
                'name'     => $this->request->getPost('name'),
                'descripcion'    => $this->request->getPost('email'),
                'estado' => $this->request->getPost('password')
            ];
            $MiObjeto->insert($data);

            return redirect()->to('/insertaDato');
        }else{
            $data['validation'] = $this->validator;
            echo view('insertaDato', $data);
        }
        
    }

    public function MostrarDato()
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
        return view ('usuarios/mostrarDato', $data);
    }

    public function enviarEditarUsuario(){
        $db = \Config\Database::connect();
        $userModel= new tipousuarioModel($db);
		$request= \Config\Services::request();
		$id_tipoUsuario=$request->getPostGet('id_tipoUsuario');
        $users=$userModel->find([$id_tipoUsuario]);
        $userAux=$userModel->find([$id_tipoUsuario]);
        $userAux=array('users'=>$userAux);
		$objetito2= new tipousuarioModel($db);
        $users2= $objetito2->findAll();
        $data['Listatipousuario']=$users2;
        $data['aux']=$userAux;
        echo view('usuarios/edit',$data);

    }
    public function editarUsuario(){
        $db = \Config\Database::connect();
        $model= new tipousuarioModel($db);
		$request= \Config\Services::request();
		$id_tipoUsuario=$request->getPostGet('id_tipoUsuario');
        $users=$model->find([$id_tipoUsuario]);
        $userAux=$model->find([$id_tipoUsuario]);
        $userAux=array('users'=>$userAux);
		$objetito2= new tipousuarioModel($db);
        $users2= $objetito2->findAll();
        $data['Listatipousuario']=$users2;
        $data['aux']=$userAux;

        $data2 =[
            
            "id_tipoUsuario" => $data['aux']['users'][0]['id_tipoUsuario'],
            "nombre" => $this->request->getPost('nombre'),
            "descripcion" => $this->request->getPost('descripcion'),
            "estado" => $this->request->getPost('estado'),
        ];
        
        $model->replace($data2);
        $db = \Config\Database::connect();
        $userModel= new tipousuarioModel($db);
		$request= \Config\Services::request();
		$id_tipoUsuario=$request->getPostGet('id_tipoUsuario');
        $users=$userModel->find([$id_tipoUsuario]);
        $userAux=$userModel->find([$id_tipoUsuario]);
        $userAux=array('users'=>$userAux);
		$objetito2= new tipousuarioModel($db);
        $users2= $objetito2->findAll();
        $data['Listatipousuario']=$users2;
        $data['aux']=$userAux;
        echo view('usuarios/mostrarDato',$data);
 
    }
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

     $email = \Config\Services::email();
     $email->setTo($this->request->getPost('email'));
     $email->setFrom('n_vargas@alumnos.upla.cl', 'Confirm Registration');
     
     $email->setSubject("hola bienvenido al Aula");
     $email->setMessage("<!doctype html>".
     "<html lang='en'>".
       "<head>".
         
         "<meta charset='utf-8'>".
         "<meta name='viewport' content='width=device-width, initial-scale=1'>".
     
         
         "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>".
     
         "<title>Ladder</title>".
       "</head>".
       "<body>".
         "<div class container>".
             "<div class='container' style='background-color:rgb(255, 255, 255)' >".
"<div class='row'>".
"<div class='col-2'>".
"</div>".
"<div class='col-1'>".
"<img src='http://pm1.narvii.com/6300/a72bb4f945a52f1bf55d81b6a16b7ed0825386be_00.jpg'width='150' height='150'>".
"</div>".
"<div class='col-3'>".
"<h1 style='color:RGB(26, 188, 156) '>Que tal mi pana estudiante</h1>".
"</div>".
"<div class='col-6'>".
"<br><br><h3 style='color:rgba(0, 0, 0, 0.938)'>Ya estas en condicones de vivir una expericencia de lujo en nuestra pagina con vistas dinamicas y mucha informacion que sera fundamental para tus estudios <br><br>Vamos arriba y derrota la PAES </h3>".
"</div>".

"<div class='col-6'>".
"<img src='https://pbs.twimg.com/media/Fim3YuCXkAQkpj9?format=jpg&name=small'style='border-radius:1rem>".
"</div>".

"</div>".
"</div>".
"<div class='container' style='background-color:rgb(255, 255, 255)' >".
"<div class='row'>".
"<div class='col-3'>".
"</div>".
"<div class='col-6'>".
"<br><br><img src='https://aulaestudio.com/wp-content/uploads/cropped-Logo-una-tinta.png' style='width: 135px; height: 43px >".
"</div>".
"<div class='col-6'>".
"</div>".
"</div>".
"</div>".
"<div class='container' style='background-color:rgb(255, 255, 255)' >".
"<div class='row'>".
"<div class='col-4'>".
"</div>".
"<div class='col-5'>".
"<br><br><h2 style='color:rgba(44, 74, 139, 0.938)'>__Ya tienes tu cuenta virtual!__
 __Que la disfrutes Campeon!__</h2>"
.
"</div>".
"<div class='col-6'>".
"</div>".
"</div>".
"</div>".
"<div class='col-5'>".
"<br><a class='nav-link' href='https://i.ytimg.com/vi/6Z0lStsM6pA/maxresdefault.jpg'>Ingresar</a>".
"</div>".
"<div class='col-6'>".
"</div>".
"</div>".
"</div>".
"</div>".
"</body>".
"</html>");
     if ($email->send()) 
     {
         echo '';
     } 
     else 
     {
         $data = $email->printDebugger(['headers']);
         print_r($data);
     }


    $MiObjeto->insert($data);
    $users= $MiObjeto->findAll();
    $data['ListaUsuario'] = $users;
    return view ('usuarios/mostrarUsuario', $data);

    }

   

    public function agregar_libro()
    {
        $db = \Config\Database::connect();
        $MiObjeto= new libros_apoyoModel($db);
        $users= $MiObjeto->findAll();
        $data['Listalibro'] = $users;

        return view('usuarios/registrarlibro', $data);
    }
    public function mostrar_libro()
    {
        $db = \Config\Database::connect();
        $MiObjeto= new libros_apoyoModel($db);
        $users= $MiObjeto->findAll();
        $data['Listalibro'] = $users;

        return view('usuarios/mostrarLibro', $data);
    }

    public function nuevolibro()
    {








        
    
        $db = \Config\Database::connect();  
        $MiObjeto = new libros_apoyoModel($db); 
        
       
        if($imagen=$this->request->getFile('imagen')){
            
            
            $newName = $imagen->getRandomName();
            
            $path="C:/xampp/htdocs/proyectobibliote/images";
            $imagen->move($path , $newName);
            $data=array( 
            'Nombre_lib'    =>  $this->request->getPost('Nombre_lib'),
            'Autor_lib'     => $this->request->getPost('Autor_lib'),
            'Genero_lib'    => $this->request->getPost('Genero_lib'),
            'resumen_lib'   => $this->request->getPost('resumen_lib'),  
            'imagen'    =>  $newName
                
            );
        }
        
    $MiObjeto->insert($data);   
    $users= $MiObjeto->findAll();
        
    $data['Listalibro'] = $users;
    return view ('usuarios/mostrarLibro', $data);
    
    }




    public function agregar_guia()
    {
        $db = \Config\Database::connect();
        $MiObjeto= new guiasModel($db);
        $users= $MiObjeto->findAll();
        $data['Listaguia'] = $users;
        
        return view('usuarios/registrarguia', $data);
    }
    public function mostrar_guia()
    {
        $db = \Config\Database::connect();
        $MiObjeto= new guiasModel($db);
        $users= $MiObjeto->findAll();
        $data['Listaguia'] = $users;
        
        return view('usuarios/mostrarGuia', $data);
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
    return view ('usuarios/mostrarGuia', $data);

    }


    public function agregar_control()
    {
        $db = \Config\Database::connect();
        $MiObjeto= new controlesModel($db);
        $users= $MiObjeto->findAll();
        $data['Listacontrol'] = $users;

        return view('usuarios/registrarcontrol', $data);
    }
    public function mostrar_control()
    {
        $db = \Config\Database::connect();
        $MiObjeto= new controlesModel($db);
        $users= $MiObjeto->findAll();
        $data['Listacontrol'] = $users;

        return view('usuarios/mostrarControl', $data);
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
    return view ('usuarios/mostrarControl', $data);

    }




    public function basedatos()
    {
        $db = \Config\Database::connect();
        $MiObjeto = new usuariosModel($db);
        $users = $MiObjeto->findAll();
        $data['listaTiposUsuarios'] = $users;
        return view('Usuarios/index',$data);
    }




    public function Logout(){
        $session = session();
        session_destroy();
        return redirect()->to(base_url().'/index');
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













        public function enviarGraficoLibro1(){
            $db = \Config\Database::connect();
            $userModel= new libroModel($db);
            $request= \Config\Services::request();
            /*$id=$request->getPostGet('id');
            $users=$userModel->find([$id]);
            $userAux=$userModel->find([$id]);
            $userAux=array('users'=>$userAux);*/
    
    
            $objetito = new libroModel($db);
            $objetito2= new autorModel($db);
            $objetito3= new editorialModel($db);
            $objetito4= new generoModel($db);
    
    
            $users = $objetito->findAll();
            $users2= $objetito2->findAll();
            $users3= $objetito3->findAll();
            $users4= $objetito4->findAll();
            //$users = $objetito->query("SELECT * FROM libro");
            $data['listaLibro']=$users;
            $data['listaAutor']=$users2;
            $data['listaEditorial']=$users3;
            $data['listaGenero']=$users4;
            //$data['aux']=$userAux;
            echo view('paginas/header');
            echo view('paginas/newnavbar');
            //echo view('formularios/formularioAutor',$data);
            echo view('graficos/graficoLibro1',$data);
            echo view('paginas/footer');
        }







        public function ver_perfil(){
         
            $db = \Config\Database::connect();
            $session = session();
            $MiObjeto = new usuariosModel($db);


            if($imagen=$this->request->getFile('imagen')){
            
            
                $newName = $imagen->getRandomName();
                
                $path="C:/xampp/htdocs/proyectobibliote/images_user";
                $imagen->move($path , $newName);
                $data=array( 
                'imagen'    =>  $newName 
                );
            }










            $users = $MiObjeto->findAll();
           
            $data['ListaUsuario']=$users;
            //print_r($id);
            //print_r($users[0]['id']);
            
            return view('paginas/perfil',$data);
            
        
        }













}
