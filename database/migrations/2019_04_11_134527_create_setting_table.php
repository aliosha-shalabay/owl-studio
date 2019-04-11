<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('seo_title', 255)->nullable();
            $table->string('seo_desc', 255)->nullable();
            $table->string('seo_keywords', 255)->nullable();
            $table->text('seo_text')->nullable();
            $table->string('phone', 25)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('address_uk', 255)->nullable();
            $table->string('address_en', 255)->nullable();
            $table->string('telegram', 255)->nullable();
            $table->string('facebook', 255)->nullable();
            $table->string('instagram', 255)->nullable();
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
        Schema::dropIfExists('setting');
    }
}
