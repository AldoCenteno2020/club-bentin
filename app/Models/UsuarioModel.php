<?php 
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    public function insertarUsuario()
    {
        $consulta = $this->db->table('productos');
        return $consulta;
    }

    public function obtenerRoles(){

        $roles = $this->db->table('tipo_usuarios');
        return $roles->get()->getResultArray();            
    }

    public function insertar($datos){
        $datos_del_usuario = $this->db->table('usuarios');
        $datos_del_usuario->insert($datos);
        // return $this->db->insertID();
    }
}