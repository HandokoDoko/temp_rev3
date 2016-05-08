<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('eventName');
<<<<<<< HEAD:database/migrations/2016_05_02_163940_create_events_table.php
            $table->string('EventSpeaking')->nullable();
            $table->string('Date');
=======
            $table->string('eventSpeaking')->nullable();
            $table->string('date');
            $table->boolean('confirm');
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e:database/migrations/2016_05_07_071508_create_events_table.php
            $table->bigInteger('template');
            $table->string('signature')->nullable();
            $table->string('enrollKey');
            $table->bigInteger('idUser');
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
        Schema::drop('events');
    }
}
