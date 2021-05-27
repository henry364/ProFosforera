<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acabado extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre_acabado',
        'tipo_acabado',
        'descripcion_acabado', 
    ];

    //relacion uno a muchos (inversa)
    PUBLIC function tipo_producto(){
        return $this->belongsto('App\Models\Tipo_producto');
    }

    //relacion uno a muchos
    public function movimiento(){
        return $this->hasmany('App\models\movimiento','id');
      } 
}
