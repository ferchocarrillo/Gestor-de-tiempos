<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portas', function (Blueprint $table) {
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
            $table->biginteger('nip');
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
        Schema::dropIfExists('portas');
    }
}
