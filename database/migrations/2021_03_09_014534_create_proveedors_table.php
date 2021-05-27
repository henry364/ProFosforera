<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_proveedor',100)->unique();
            $table->text('telefono_proveedor',20)->unique()->nullable();
            $table->string('correo_proveedor',100)->unique()->nullable();
            $table->text('rtn_proveedor',30)->unique()->nullable();
            $table->text('identidad_proveedor',30)->unique()->nullable();
            $table->text('direccion_proveedor',100)->nullable();
            $table->text('descripcion_proveedor',255)->nullable();
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedors');
    }
}
