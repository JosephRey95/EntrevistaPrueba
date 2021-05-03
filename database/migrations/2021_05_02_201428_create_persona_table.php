<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('i_id');
            $table->string('c_nombre', 45);
            $table->string('c_apellido', 45);
            $table->string('c_telefono', 45);
            $table->string('c_email')->unique();
            $table->string('c_direccion', 45);
            $table->string('c_foto', 255);
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
        Schema::dropIfExists('persona');
    }
}
