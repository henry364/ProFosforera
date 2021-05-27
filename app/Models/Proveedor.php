<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = [
      'id',
      'nombre_proveedor',
      'telefono_proveedor',
      'correo_proveedor',
      'rtn_proveedor',
      'identidad_proveedor',
      'genero_cliente',
      'direccion_proveedor',
      'descripcion_proveedor',
      'created_at',
      'update_at',
      ];

  protected $table ='proveedors';

    //relacion uno a muchos
    public function productos(){
        return $this->hasmany('App\models\producto','id');
      }

    //relacion uno a muchos
    public function compras(){
      return $this->hasmany('App\Models\Compra', 'id');
    }
}
