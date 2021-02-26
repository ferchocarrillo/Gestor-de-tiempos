<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatefijaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fija', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->biginteger('documento');
            $table->date('fexpedicion');
            $table->string ('departamento');
            $table->string('ciudad');
            $table->string('barrio');
            $table->string('direccion');
            $table->biginteger('estrato');
            $table->biginteger ('numero de grabacion');
            $table->biginteger ('numero de contacto');
            $table->string('producto');
            $table->integer('FOX');
            $table->integer('HBO');
            $table->integer('Cds Movil');
            $table->integer('Cds Fijo');
            $table->integer('Paquete Adultos');
            $table->integer('Decodificador');
            $table->integer('Svas Lineas');
            $table->biginteger ('velocidad');
            $table->string('tecnologia');
            $table->string('observaciones');
            $table->string('agente');
            $table->string('revisados');
            $table->string('estadorevisados');
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
        Schema::dropIfExists('fija');
    }
}

