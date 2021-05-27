<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tipoproductocontroller extends Controller
{
    public function tipoproducto(){
        return view('rutas-del-sistema.tipoproducto');
    }
    public function tipoproductotabla(){
        return view('rutas-del-sistema.tipoproductotabla');
    } 
}
