<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_setting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable(true);
            $table->string('license')->nullable(true);
            $table->string('logo_url')->nullable(true);
            $table->string('facebook_url')->nullable(true);
            $table->string('twitter_url')->nullable(true);
            $table->string('linkedin_url')->nullable(true);
            $table->string('instagram_url')->nullable(true);
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
        Schema::dropIfExists('site_setting');
    }
}
