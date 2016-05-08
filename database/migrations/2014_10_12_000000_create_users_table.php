<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userName')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('orgName');
            $table->string('orgEmail')->unique();
            $table->string('orgCountry');
            $table->string('orgCity');
            $table->string('orgAddress');
            $table->string('orgPhone');
            $table->string('photo');
            $table->string('gender');
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
        Schema::drop('users');
    }
}
