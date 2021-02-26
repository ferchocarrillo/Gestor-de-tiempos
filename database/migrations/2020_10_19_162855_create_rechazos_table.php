<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRechazosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rechazos', function (Blueprint $table) {
            $table->id();
            $table->biginteger('numero celular');
            $table->string('nombre del cliente');
            $table->biginteger('documento');
            $table->string('causal de rechazo');
            $table->string('tipo de proceso');
            $table->string('fecha del rechazo');
            $table->string('observaciones');
            $table->string('agente');
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
        Schema::dropIfExists('rechazos');
    }
}
