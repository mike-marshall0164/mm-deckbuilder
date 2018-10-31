<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->string('extra_info')->nullable();
            $table->string('card_type'); //minion, spell, building
            $table->string('rarity'); //common rare, supreme etc.
            $table->integer('mana_cost')->default(0);
            $table->integer('crafting_cost');
            $table->string('img_url');

            // mostly minion based stats
            $table->string('unit_type')->nullable(); //ground / air
            $table->integer('unit_count')->nullable();
            $table->integer('unit_health')->nullable();
            $table->integer('unit_speed')->nullable();
            $table->decimal('unit_range', 5,2)->nullable();
            $table->integer('damage')->nullable();
            $table->integer('target_count')->nullable();
            $table->decimal('attack_speed', 5, 2)->nullable();
            $table->decimal('attack_delay', 5, 2)->nullable();
            $table->boolean('can_target_air')->nullable()->default(false);

            // spell based stats
            $table->decimal('radius', 5, 2)->nullable();
            $table->decimal('duration', 5,2)->nullable(); //Seconds
            $table->decimal('delay', 5, 2)->nullable(); //Seconds


            //building based stats
            $table->decimal('unit_production_speed')->nullable(); //seconds until generated
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
