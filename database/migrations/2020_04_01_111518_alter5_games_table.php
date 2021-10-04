<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alter5GamesTable extends Migration
{
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->text('seo_description')->nullable()->after('volatilitet');
            $table->text('seo_keyword')->nullable()->after('volatilitet');
            $table->text('seo_title')->nullable()->after('volatilitet');
        });
    }

    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn('seo_description');
            $table->dropColumn('seo_keyword');
            $table->dropColumn('seo_title');
        });
    }
}
