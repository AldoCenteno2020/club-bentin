<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    public function index()
    {
        if(!session()->is_logged){
            return redirect()->to(base_url('/'));
        }else{
            $tipoUsuario=new UsuarioModel();
            $datos['rol']=$tipoUsuario->obtenerRoles();
            return view('RegistrarUsuario',$datos);     
        }      
    }

    public function crear()
    {
        $nombre = $this->request->getPost('nombre');
        $apellidoP = $this->request->getPost('apellidoP');
        $apellidoM = $this->request->getPost('apellidoM');
        $usuario = $this->request->getPost('usuario');
        $contra1 = $this->request->getPost('contra1');
        $contra2 = $this->request->getPost('contra2');
        $dni = $this->request->getPost('dni');
        $fono = $this->request->getPost('fono');
        $correo = $this->request->getPost('correo');
        $rol = $this->request->getPost('select-rol');

        $datos = [
            "Nombre_Usuarios" =>$nombre,
            "ApellidoM_Usuarios" =>$apellidoM,
            "ApellidoP_Usuarios" => $apellidoP,
            "Nick_Usuarios" => $usuario,
            "Contraseña_Usuarios" => $contra1,
            "DNI_Usuarios" => $dni,
            "Email_Usuarios" => $correo,
            "Telefono_Usuarios" => $fono,
            "Tipo_usuarios_ID_Tipo_Usuarios" => $rol
        ];
        
        $crud = new UsuarioModel();

        $crud->insertar($datos);
        
        return redirect()->to(base_url('/panel'))->with('mensaje','1');;

    }
}