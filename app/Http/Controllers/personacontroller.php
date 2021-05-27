<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personacontroller extends Controller
{
    public function persona(){
        return view('rutas-del-sistema.persona');
    }
    public function personatabla(){
        return view('rutas-del-sistema.personatabla');
    } 
}
