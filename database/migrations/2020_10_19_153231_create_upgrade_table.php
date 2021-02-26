<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpgradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upgrade', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->biginteger('documento');
            $table->date('fventa');
            $table->biginteger ('numero');
            $table->biginteger('corte');
            $table->biginteger('planhistorico');
            $table->biginteger('planventa');
            $table->string('activacion');
            $table->biginteger ('numero de grabacion');
            $table->string('observacion');
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
        Schema::dropIfExists('upgrade');
    }
}

