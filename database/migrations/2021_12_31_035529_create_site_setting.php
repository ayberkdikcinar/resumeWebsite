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
            $table->string('title');
            $table->string('logo_url');
            $table->string('facebook_url');
            $table->string('twitter_url');
            $table->string('linkedin_url');
            $table->string('instagram_url');
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
