<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->default('homepage');
            $table->string('title')->default('Homepage');
            $table->string('bannerTitle')->nullable(true);
            $table->string('bannerContent')->nullable(true);
            $table->string('banner_image_url')->nullable(true)->default('');
            $table->string('card_one_title')->nullable(true);
            $table->string('card_one_content')->nullable(true);
            $table->string('card_two_title')->nullable(true);
            $table->string('card_two_content')->nullable(true);
            $table->string('card_three_title')->nullable(true);
            $table->string('card_three_content')->nullable(true);
            $table->string('body_title')->nullable(true);
            $table->string('body_left_content')->nullable(true);
            $table->string('body_right_content')->nullable(true);
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
        Schema::dropIfExists('homepage');
    }
}
