<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_inquests')->unsigned();
            $table->integer('id_schools')->unsigned();
            $table->string('nombres_est',100);
            $table->string('apellidos_est',100);
            $table->string('identificacion_est',20);
            $table->string('celular_est',15);
            $table->string('correo_est',120);
            $table->string('firma_est',50);
            $table->boolean('autizacion_uso_datos_personales_est',null);
            $table->timestamps();


            $table->foreign('id_inquests')->references('id')->on('inquests')
            ->onDelete()
            ->onUpdate();

            $table->foreign('id_schools')->references('id')->on('schools')
            ->onDelete()
            ->onUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
