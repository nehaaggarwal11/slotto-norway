<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alter3GamesTable extends Migration
{
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->text('maks_innsats')->nullable()->after('name');
            $table->text('min_innsats')->nullable()->after('name');
            $table->text('volatilitet_game')->nullable()->after('name');
            $table->text('maks_mynt_gevinst')->nullable()->after('name');
            $table->text('gevinstlinjer')->nullable()->after('name');
            $table->text('layout')->nullable()->after('name');
            $table->text('rtp_game')->nullable()->after('name');
        });
    }

    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn('maks_innsats');
            $table->dropColumn('min_innsats');
            $table->dropColumn('volatilitet_game');
            $table->dropColumn('maks_mynt_gevinst');
            $table->dropColumn('gevinstlinjer');
            $table->dropColumn('layout');
            $table->dropColumn('rtp_game');
            $table->dropColumn('game_table');
        });
    }
}
