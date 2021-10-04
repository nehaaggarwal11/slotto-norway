<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCasinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('casinos', function (Blueprint $table) {
            $table->string('spins_text')->nullable()->after('spins');
            $table->string('bonus_text')->nullable()->after('bonus');
            $table->string('wagering_requirements_text')->nullable()->after('wagering_requirements');
            $table->string('banner_info')->nullable()->after('wagering_requirements_text');
            $table->string('popular_casino_hover_info')->nullable()->after('wagering_requirements_text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('casinos', function (Blueprint $table) {
            $table->dropColumn('spins_text');
            $table->dropColumn('bonus_text');
            $table->dropColumn('wagering_requirements_text');
            $table->dropColumn('banner_info');
            $table->dropColumn('popular_casino_hover_info');
        });
    }
}
