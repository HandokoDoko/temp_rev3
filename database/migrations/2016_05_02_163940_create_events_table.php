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
            $table->string('EventSpeaking')->nullable();
            $table->string('Date');
            $table->boolean('confirm');
            $table->bigInteger('template');
            $table->string('Signature')->nullable();
            $table->string('EnrolKey');
            $table->bigInteger('idUser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
