<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecksTable extends Migration
{

    public function up()
    {
        Schema::create('decks', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->integer('upvotes')->default(0);
            $table->integer('wins')->default(0);
            $table->integer('losses')->default(0);
            $table->string('difficulty')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onDelete('cascade');
            $table->integer('master_id')->unsigned()->nullable();
            $table->foreign('master_id')
                ->references('id')
                ->on('masters')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('decks');
    }
}
