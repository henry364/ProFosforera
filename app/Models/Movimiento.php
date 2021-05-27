<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'acabado_movimiento',
        'fecha_movimiento',
        'descripcion_movimiento',
    ];

        //relacion uno a muchos (inversa)
        PUBLIC function acabado(){
            return $this->belongsto('App\Models\acabado','id');
        }

        //relacion muchos a muchos 
        PUBLIC function productos(){
            return $this->belongsToMany(Producto::class)->withPivot(['cantidad']);
        }   
}
