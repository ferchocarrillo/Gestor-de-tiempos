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
