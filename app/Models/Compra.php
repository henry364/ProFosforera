<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'proveedor_compra',
        'fecha_compra',
        'descripcion_compra',
        'created_at',
        'update_at',         
    ];

    protected $table ='compras';

        //relacion uno a muchos (inversa)
        PUBLIC function Proveedor(){
            return $this->belongsto('App\Models\proveedor','id');
        }

        //relacion muchos a muchos 
        PUBLIC function productos(){
            return $this->belongsToMany(Producto::class)->withPivot(['cantidad']);
        } 
}
