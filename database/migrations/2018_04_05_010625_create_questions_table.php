<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
   
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');

            $table->enum('conf1', ['UNO','DOS','TRES','CUATRO','CINCO']);
            $table->enum('conf2', ['UNO','DOS','TRES','CUATRO','CINCO']);
            $table->enum('conf3', ['UNO','DOS','TRES','CUATRO','CINCO']);
            $table->enum('tem1', ['UNO','DOS','TRES','CUATRO','CINCO']);
            $table->enum('tem2', ['UNO','DOS','TRES','CUATRO','CINCO']);
            $table->enum('tem3', ['UNO','DOS','TRES','CUATRO','CINCO']);
            $table->enum('log1', ['UNO','DOS','TRES','CUATRO','CINCO']);
            $table->enum('log2', ['UNO','DOS','TRES','CUATRO','CINCO']);
            $table->enum('log3', ['UNO','DOS','TRES','CUATRO','CINCO']);
            $table->string('sugerencia',250);
            $table->enum('enterar', [0=>'FACEBOOK',1=>'YOUTUBE',2=>'TWITTER',3=>'PAGINA WEB']);
            $table->string('medios',250);
            $table->enum('informacion', ['BVC','PUNTO BVC','UNIVERSIDAD','AMIGO']);
            $table->string('medios1',250);
            $table->enum('validar1', ['SI','NO']);
            $table->string('cursos',250);
            $table->enum('hora', ['7 a 9am','8 a 10am','2 a 4pm', '4 a 6pm', '6 a 8pm','6 a 9pm','7 a 9pm']);
            $table->enum('validar2', ['SI','NO']);
            $table->enum('hora1', ['7 a 9am','7 a 10am','7 a 11am', '7 a 12am', '7am a 1pm','8 a 10am','8 a 11am','8 a 12am','8am a 1pm']);
            $table->string('temas',250);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
