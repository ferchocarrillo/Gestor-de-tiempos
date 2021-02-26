<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaNuevasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_nuevas', function (Blueprint $table) {
                $table->increments('id');
                $table->biginteger ('numero');
                $table->biginteger('documento');
                $table->string('nombres');
                $table->string('apellidos');
                $table->string('correo');
                $table->string('departamento');
                $table->string('ciudad');
                $table->string('barrio');
                $table->string('direccion');
                $table->string('tipocliente');
                $table->string('planadquiere');
                $table->biginteger('ncontacto');
                $table->biginteger('imei');
                $table->date('fvc');
                $table->date('fentrega');
                $table->date('fexpedicion');
                $table->date('fnacimiento');
                $table->string('origen');
                $table->biginteger('ngrabacion');
                $table->longText('observaciones');
                $table->string('agente');
                $table->string('revisados')->nullable();
                $table->string('estadorevisado')->nullable();
                $table->longText('obs2')->nullable();
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
        Schema::dropIfExists('linea_nuevas');
    }
}
