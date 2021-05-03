<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaje_personas', function (Blueprint $table) {
            $table->id();
            $table->string('c_email');
            $table->string('c_pais');
            $table->string('c_ciudad');
            $table->datetime('f_fecha');
            $table->foreign('c_email')->references('c_email')->on('persona');
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
        Schema::dropIfExists('viaje_personas');
    }
}
