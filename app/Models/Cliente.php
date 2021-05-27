<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre_cliente',
        'telefono_cliente',
        'correo_cliente',
        'rtn_cliente',
        'identidad_cliente',
        'genero_cliente',
        'direccion_cliente',
        'descripcion_cliente',
        'created_at',
        'update_at',
        ];

    protected $table ='clientes';

    //relacion uno a muchos
    public function pedidos(){
      return $this->hasmany('App\Models\Pedido', 'id');
    }
}