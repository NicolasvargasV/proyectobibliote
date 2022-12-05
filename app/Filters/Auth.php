<?php 
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before (RequestInterface $request, $arguments = null)
    {
        if(!session()->is_logged){
            return redirect()->route('login')->with('msg',[
                'type' -> 'warning',
                'body' -> 'Para acceder a esta lugar primero debe logear su cuenta'
            ]);
        }

        $model = model('UsersModel');
        if(!$user = $model->getUserBy('id',session()->id)){
            session()->destroy();
            return redirect()->route('login')->with('msg',[
                'type' -> 'danger',
                'body' -> 'El usuario no esta disponible'
            ]);
        }
        dd($user);
    }
}