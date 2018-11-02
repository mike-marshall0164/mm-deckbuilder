<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImgUrlToMasters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('masters', 'img_url')) {
            Schema::table('masters', function (Blueprint $table) {
                $table->string('img_url')->nullable();
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
        if (Schema::hasColumn('masters', 'img_url')) {
            Schema::table('masters', function (Blueprint $table) {
                $table->dropColumn('img_url');
            });
        }
    }
}
