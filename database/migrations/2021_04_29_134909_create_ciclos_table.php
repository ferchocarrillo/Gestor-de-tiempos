<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiclosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('llave');
            $table->string('nombre');
            $table->bigInteger('cedula');
            $table->date('fecha');
            $table->time('ingreso');
            $table->time('salida');
            $table->time('breakin');
            $table->time('breakout');
            $table->integer('timebreak');
            $table->time('almuerzo');
            $table->time('almuerzoout');
            $table->integer('timelunch');
            $table->time('capacitacion');
            $table->time('capout');
            $table->integer('timecap');
            $table->time('pausas');
            $table->time('pausasout');
            $table->integer('timepausas');
            $table->time('daño');
            $table->time('dañoout');
            $table->time('daño2');
            $table->time('dañoout2');
            $table->time('daño3');
            $table->time('dañoout3');
            $table->integer('timedaño');
            $table->time('evaluacion');
            $table->time('evaluacionout');
            $table->integer('timeeva');
            $table->time('retro');
            $table->time('retroout');
            $table->integer('timeretro');
            $table->time('reunion');
            $table->time('reunionout');
            $table->integer('timereunion');
            $table->time('baño1');
            $table->integer('timewater1');
            $table->time('baño2');
            $table->integer('timewater2');
            $table->time('baño3');
            $table->integer('timewater3');
            $table->time('calamidad');
            $table->time('emeMedica');
            $table->integer('total');
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
        Schema::dropIfExists('ciclos');
    }
}
