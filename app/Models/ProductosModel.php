<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model
{
    public function obtenerProductos()
    {
        $consulta = $this->db->table('productos');
        // if($consulta->num_rows()>0){
            return $consulta;
            
        // }else{
            // return false;
        // }
        
    }
}