<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('schools_id')->unsigned()->default(0);
            $table->string('nombres_prof',100);
            $table->string('apellidos_prof',100);
            $table->string('identificacion_prof',20);
            $table->string('celular_prof',15);
            $table->string('correo_prof',200);
            $table->timestamps();
            $table->foreign('schools_id')->references('id')->on('schools');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
