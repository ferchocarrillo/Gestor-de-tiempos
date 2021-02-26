<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrepostDigitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prepost_digitals', function (Blueprint $table) {
            $table->increments('id');
                $table->bigInteger('numero');
                $table->string('nombres');
                $table->bigInteger('documento');
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
                $table->longText('observaciones'); 
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
        Schema::dropIfExists('prepost_digitals');
    }
}
