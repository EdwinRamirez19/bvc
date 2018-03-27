<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquests', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('enc_dominio_tema');
        $table->integer('enc_comunicacion_grupo');
        $table->integer('enc_ejemplo_utilizado');
        $table->integer('enc_relevancia');
        $table->integer('enc_interes');
        $table->integer('enc_practicidad_tema');
        $table->integer('enc_duracion');
        $table->integer('enc_cumplimiento_horario');
        $table->integer('enc_lugar_evento');
        $table->string('enc_sugerencia_comentario',250);
        $table->string('enc_enteraste',100);
        $table->string('enc_cual_enteraste',150);
        $table->string('enc_envio_informacion',100);
        $table->string('enc_cual_encio_informacion',150);
        $table->boolean('enc_invertido_bolsa',null);
        $table->string('enc_pagar_recursos',200);
        $table->string('enc_horario_curso',150);
        $table->boolean('enc_asistir_fin_semana',null);
        $table->string('enc_fin_horario_curso',150);
        $table->string('enc_tema_bvs',150);
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
         Schema::dropIfExists('inquests');

    }
}
