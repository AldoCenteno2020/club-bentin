<?php

namespace App\Controllers;
use App\Models\LoginModel;

class LoginController extends BaseController
{
    public function index()
    {
        if(!session()->is_logged){
            // return redirect()->to(base_url('/'));
            return view('loginView');
        }else{
            return redirect()->to(base_url('panel'));
        }       
        
    }

    public function login()
    {
        $usuario = $this->request->getPost('usuario');
        $contra = $this->request->getPost('password');

        $Usuario = new LoginModel();

        $datosUsuario = $Usuario->obtenerUsuario(['Nick_Usuarios' => $usuario]);

        // var_dump($datosUsuario);
        if(count($datosUsuario) > 0 && $contra==$datosUsuario[0]['Contraseña_Usuarios'])
        {

            $data = [
                "usuario" => $datosUsuario[0]['Nick_Usuarios'],
                "nombre" => $datosUsuario[0]['Nombre_Usuarios'],
                "is_logged" => true
            ];
             
            $session = session();
            $session->set($data); 
            
            return redirect()->to(base_url('/panel'))->with('mensaje','1');;
           
        }else{
            return redirect()->to(base_url('/'))->with('mensaje','0');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
}
