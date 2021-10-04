<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentCategoryContentPagePivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_category_content_page', function (Blueprint $table) {
            $table->unsignedInteger('content_page_id');
            $table->foreign('content_page_id', 'content_page_id_fk_1048158')->references('id')->on('content_pages')->onDelete('cascade');
            $table->unsignedInteger('content_category_id');
            $table->foreign('content_category_id', 'content_category_id_fk_1048158')->references('id')->on('content_categories')->onDelete('cascade');
        });
    }
}
