<?php

namespace App\Controllers;
use App\Models\ProductosModel;
use CodeIgniter\API\ResponseTrait;

class ProductoController extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        // $data = new ProductosModel();
        // $datosProductos = $data->obtenerProductos();
        // echo json_encode ($datosProductos);    
        
        $data = json_decode('{
            "draw": 1,
            "recordsTotal": 57,
            "recordsFiltered": 57,
            "data": 
            [
                {
                  "id": 1,
                  "name": "Leanne Graham",
                  "phone": "985626",
                  "job": "Sincere@april.biz",
                  "created_at": "28 de noviembre"               
                },
                {
                    "id": 1,
                    "name": "Leanne Graham",
                    "phone": "455541",
                    "job": "Sincere@april.biz",
                    "created_at": "28 de noviembre"               
                }
              ] 
        }');

        return $this->respond($data);
    }
}