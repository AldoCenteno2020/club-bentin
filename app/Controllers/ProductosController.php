<?php

namespace App\Controllers;
use App\Models\RegistroProductosModel;

class ProductosController extends BaseController
{

    public function RegistroProducto()
    {
        if(!session()->is_logged){
            // return redirect()->to(base_url('/'));
            return redirect()->to(base_url('/'));
        }else{
    
            $Producto = new RegistroProductosModel();
            $DatosProducto = $Producto->ObtenerProductos();

            $data = [
                "datos" => $DatosProducto
            ];

            return view('RegistroProductoView', $data);     
        }      
    }
}