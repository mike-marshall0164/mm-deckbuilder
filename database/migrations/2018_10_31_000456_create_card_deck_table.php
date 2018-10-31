<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardDeckTable extends Migration
{

    public function up()
    {
        Schema::create('card_deck', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('card_id')->unsigned()->index();
            $table->integer('deck_id')->unsigned()->index();
            $table->foreign('card_id')
                ->references('id')
                ->on('cards');
            $table->foreign('deck_id')
                ->references('id')
                ->on('decks');

        });
    }

    public function down()
    {
        Schema::drop('card_deck');
    }
}
