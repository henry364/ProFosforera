<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class materiaprimacontroller extends Controller
{
    public function materiaprima(){
        return view('rutas-del-sistema.materiaprima');
    }
    public function materiaprimatabla(){
        return view('rutas-del-sistema.materiaprimatabla');
    } 
}
