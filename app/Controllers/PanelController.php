<?php

namespace App\Controllers;

class PanelController extends BaseController
{
    public function index()
    {
        if(!session()->is_logged){
            // return redirect()->to(base_url('/'));
            return redirect()->to(base_url('/'));
        }else{
            return view('PanelView');     
        }      
    }

}