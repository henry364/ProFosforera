<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class empresacontroller extends Controller
{
    public function empresa(){
        return view('rutas-del-sistema.empresa');
    }
    public function empresatabla(){
        return view('rutas-del-sistema.empresatabla');
    }  
}
