<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{

    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('auth0_id');
            $table->string('username');
            $table->string('email')->nullable();
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('user');
    }
}