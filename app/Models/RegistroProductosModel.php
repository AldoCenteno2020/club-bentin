<?php 
namespace App\Models;

use CodeIgniter\Model;

class RegistroProductosModel extends Model
{
    public function ObtenerProductos()
    {
        $query = $this->db->query("SELECT * FROM productos");
        return $query->getResult();
        
    }

    public function ObtenerNombreProductos()
    {
        $query = $this->db->query("SELECT * FROM productos");
        return $query->getResult();
        
    }

}