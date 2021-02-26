<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReporteTiempos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_tiempos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('usuario');
            $table->time('entrada');
            $table->time( 'break_in');
            $table->time('break_out');
            $table->time('almuerzo_in');
            $table->time('almuerzo_out');
            $table->time('salida');
            $table->bigInteger('tiempo_conexion');
            $table->bigInteger('cumplimiento');
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
        Schema::dropIfExists('reporte_tiempos');
    }
}
