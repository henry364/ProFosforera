<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class datatablecontroller extends Controller
{
    public function genero(){
        $generos =genero::all();
        return datatables()->of(Genero::all())->toJson();
    }
}
