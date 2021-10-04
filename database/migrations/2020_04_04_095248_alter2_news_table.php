<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alter2NewsTable extends Migration
{
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->text('seo_description')->nullable()->after('description');
            $table->text('seo_keyword')->nullable()->after('description');
            $table->text('seo_title')->nullable()->after('description');
        });
    }

    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('seo_description');
            $table->dropColumn('seo_keyword');
            $table->dropColumn('seo_title');
        });
    }
}
