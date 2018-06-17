<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsSchools extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('schools_id')->unsigned()->default(0);
            $table->integer('events_id')->unsigned()->default(0);
            $table->foreign('schools_id')->references('id')->on('schools');
            $table->foreign('events_id')->references('id')->on('events');
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
       Schema::dropIfExists('events_schools');
    }
}
