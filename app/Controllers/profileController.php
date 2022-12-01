<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\tipousuarioModel;
use App\Models\usuariosModel;
use App\Models\UserModel;
use App\Models\libros_apoyoModel;
use App\Models\guiasModel;
use App\Models\controlesModel;
use App\Models\usuarios;
  
class ProfileController extends Controller
{
   /* public function index()
    {
        $session = session();
        echo "Hello : ".$session->get('name');
    }
     */

    public function index()
    {
     
        return view('index2');
        return view('layout/fother');
        return view('usuarios/registrarlibro');
        
    }


}