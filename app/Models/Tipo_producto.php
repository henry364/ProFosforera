<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_producto extends Model
{
    use HasFactory;

    //relacion uno a muchos
    public function productos(){
        return $this->hasmany('App\models\producto');
      }
}
