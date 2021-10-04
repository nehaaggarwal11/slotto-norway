<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->text('game_link')->nullable()->after('bg_image_alt_text');
            $table->string('name')->nullable()->after('bg_image_alt_text');
            $table->text('game_table')->nullable()->after('bg_image_alt_text');
            $table->text('description')->nullable()->after('bg_image_alt_text');
        });
    }

    
    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn('game_link');
            $table->dropColumn('name');
            $table->dropColumn('game_table');
            $table->dropColumn('description');
        });
    }
}
