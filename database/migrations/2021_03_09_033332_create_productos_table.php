<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     * $table->foreign('marca_producto')->references('id')->on('marcas')->onUpdate('cascade')->onDelete('cascade');
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto',100)->unique();
            $table->unsignedBigInteger('tipo_producto')->nullable();
            $table->unsignedBigInteger('marca_producto')->nullable();
            $table->unsignedBigInteger('proveedor_producto')->nullable();
            $table->text('descripcion_producto',100)->nullable();
            $table->timestamps();
            $table->foreign('tipo_producto')->references('id')->on('tipo_productos')->onUpdate('cascade')->onDelete('cascade');
           
            $table->foreign('proveedor_producto')->references('id')->on('proveedors')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
