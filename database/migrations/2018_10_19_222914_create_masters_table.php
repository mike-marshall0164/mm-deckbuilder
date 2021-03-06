<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masters', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->unique();
            $table->string("description");
            $table->string("extra_data");
            $table->string('img_url')->nullable();
            $table->decimal("range", 5, 2);
            $table->decimal("attack_damage", 5, 2);
            $table->decimal("target_count", 4, 2);
            $table->decimal("attack_speed", 4, 2);
            $table->decimal("attack_delay", 4, 2);
            $table->decimal("aoe_size", 5, 2)->nullable();
            $table->boolean("can_hit_air");
            
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
        Schema::dropIfExists('masters');
    }
}
