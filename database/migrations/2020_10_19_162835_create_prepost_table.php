<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrepostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prepost', function (Blueprint $table) {
            $table->id();
            $table->biginteger('numero de celular');
            $table->string('nombres');
            $table->biginteger('documento');
            $table->date('fexpedicion');
            $table->string('tipocliente');
            $table->string('correo');
            $table->string('departamento');
            $table->string('ciudad');
            $table->string('barrio');
            $table->string('direccion');
            $table->integer('corte');
            $table->string('planventa');
            $table->string('activacion');
            $table->integer('token');
            $table->string('observaciones');
            $table->string('agente');
            $table->string('revisado');
            $table->string('estadorevisado');
            $table->string('obs2');
            $table->string('backoffice');
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
        Schema::dropIfExists('prepost');
    }
}
