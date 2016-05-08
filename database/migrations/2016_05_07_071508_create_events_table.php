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
            $table->string('eventSpeaking')->nullable();
            $table->string('date');
            $table->boolean('confirm');
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
