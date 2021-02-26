<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreatealmuerzoOutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::dropIfExists('almuerzo_outs');
        Schema::create('almuerzo_outs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->time('fin almuerzo');
            $table->string('usuario');
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
        Schema::dropIfExists('almuerzo_out');
    }
}
