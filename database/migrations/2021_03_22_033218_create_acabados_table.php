<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcabadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acabados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_acabado',100)->unique();
            $table->unsignedBigInteger('tipo_acabado')->nullable();
            $table->text('descripcion_acabado',100)->nullable();
            $table->timestamps();
            $table->foreign('tipo_acabado')->references('id')->on('tipo_productos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acabados');
    }
}
