<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpgradeDigitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upgrade_digitals', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('numero');
            $table->string('nombres');
            $table->bigInteger('documento');
            $table->string('correo');
            $table->date('fventa');            
            $table->integer('corte');  
            $table->string('planhistorico');            
            $table->string('planventa');              
            $table->string('activacion');    
            $table->bigInteger('ngrabacion');
            $table->longText('observacion');
            $table->string('agente');  
            $table->string('revisados');            
            $table->string('estadorevisado'); 
            $table->longText('obs2');            
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
        Schema::dropIfExists('upgrade_digitals');
    }
}
