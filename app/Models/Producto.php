<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //relacion uno a muchos (inversa)
    PUBLIC function marca(){
        return $this->belongsto('App\Models\Marca');
    }

    //relacion uno a muchos (inversa)
    PUBLIC function tipo_producto(){
        return $this->belongsto('App\Models\Tipo_producto');
    }

    //relacion uno a muchos (inversa)
    PUBLIC function proveedor(){
        return $this->belongsto('App\Models\proveedor');
    }
}
