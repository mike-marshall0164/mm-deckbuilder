<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDifficultyToDeck extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('decks', 'difficulty')) {
            Schema::table('decks', function (Blueprint $table) {
                $table->string('difficulty')->nullable();
            });
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('decks', 'difficulty')) {
            Schema::table('decks', function (Blueprint $table) {
                $table->dropColumn('difficulty');
            });
        }
    }
}
