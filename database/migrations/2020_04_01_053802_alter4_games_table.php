<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alter4GamesTable extends Migration
{
    
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->text('bg_image_logo_alt_text')->nullable()->after('bg_image_alt_text');
            $table->text('bg_image_button_link')->nullable()->after('bg_image_button_text');
        });
    }
    
    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn('bg_image_logo_alt_text');
            $table->dropColumn('bg_image_button_link');
        });
    }
}
