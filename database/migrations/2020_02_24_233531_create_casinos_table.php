<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casinos', function (Blueprint $table) {
            $table->increments('id');

            // Single page fields
            $table->string('name');
            $table->longText('overview');
            $table->longText('detail');

            // Table fields
            $table->string('link');
            $table->string('small_description');
            $table->tinyInteger('rating')->unsigned();
            $table->text('description');
            $table->string('info');
            $table->integer('spins')->unsigned();
            $table->integer('bonus')->unsigned();
            $table->integer('wagering_requirements');

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
        Schema::dropIfExists('casinos');
    }
}
