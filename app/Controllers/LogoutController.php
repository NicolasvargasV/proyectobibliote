<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class LogoutController extends Controller
{
    public function logout()
    {
        session_destroy();
        return redirect()->to('/index');
    }   
}