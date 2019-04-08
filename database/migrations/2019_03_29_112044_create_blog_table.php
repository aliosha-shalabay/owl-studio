<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_uk', 255);
            $table->string('title_en', 255);
            $table->text('text_uk');
            $table->text('text_en');
            $table->string('seo_title', '255');
            $table->string('seo_description', '255');
            $table->string('seo_keywords', '255');
            $table->string('img', '255');
            $table->string('alias', '255');
            $table->integer('user_id')->unsigned()->index();
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
        Schema::dropIfExists('blog');
    }
}
