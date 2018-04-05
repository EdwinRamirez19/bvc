<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_even',200);
            $table->string('lugar_even',150);
            $table->string('descripcion_even',250);
            $table->string('tipo_even',15);
            $table->string('organizador_even',20);
            $table->date('fecha_even');
            $table->time('hora_even');
            $table->rememberToken();
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
        Schema::dropIfExists('events');
    }
}
