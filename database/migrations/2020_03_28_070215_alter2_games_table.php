<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alter2GamesTable extends Migration
{
    
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->text('volatilitet')->nullable()->after('game_link');
            $table->text('rtp')->nullable()->after('game_link');
            $table->text('provider')->nullable()->after('game_link');
        });
    }

    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn('volatilitet');
            $table->dropColumn('rtp');
            $table->dropColumn('provider');
        });
    }
}
