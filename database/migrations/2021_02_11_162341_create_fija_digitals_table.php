<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFijaDigitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fija_digitals', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->biginteger('documento');
            $table->date('fexpedicion');
            $table->string ('departamento');
            $table->string ('correo');
            $table->string('ciudad');
            $table->string('barrio');
            $table->string('direccion');
            $table->biginteger('estrato');
            $table->biginteger ('ngrabacion');
            $table->biginteger ('ncontacto');
            $table->string('producto');
            $table->integer('FOX')->nullable();
            $table->integer('HBO')->nullable();
            $table->integer('cds_movil')->nullable();
            $table->integer('cds_fija')->nullable();
            $table->integer('Paquete_Adultos')->nullable();
            $table->integer('Decodificador')->nullable();
            $table->integer('Svas_lineas')->nullable();
            $table->string('velocidad');
            $table->string('tecnologia');
            $table->longText('observacion');
            $table->string('agente');
            $table->string('revisados')->nullable();
            $table->string('estadorevisado')->nullable();
            $table->longText('obs2')->nullable();
            $table->string('backoffice')->nullable();
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
        Schema::dropIfExists('fija_digitals');
    }
}
