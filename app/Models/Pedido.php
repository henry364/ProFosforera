<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_pedido',
        'fecha_pedido',
        'descripcion_pedido',
        'created_at',
        'update_at',
    ];

    protected $table ='pedidos'; 

        //relacion uno a muchos (inversa)
        PUBLIC function Cliente(){
            return $this->belongsto('App\Models\Cliente', 'id');
        }

        //relacion muchos a muchos 
        PUBLIC function productos(){
            return $this->belongsToMany(Producto::class)->withPivot(['cantidad']);
        }     
}