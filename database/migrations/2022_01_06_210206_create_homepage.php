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
            $table->longText('bannerContent')->nullable(true);
            $table->string('banner_image_url')->nullable(true)->default('');
            $table->string('card_one_title')->nullable(true);
            $table->longText('card_one_content')->nullable(true);
            $table->string('card_two_title')->nullable(true);
            $table->longText('card_two_content')->nullable(true);
            $table->string('card_three_title')->nullable(true);
            $table->longText('card_three_content')->nullable(true);
            $table->string('top_body_title')->nullable(true);
            $table->longText('top_body_left_content')->nullable(true);
            $table->longText('top_body_right_content')->nullable(true);
            $table->string('bottom_body_title')->nullable(true);
            $table->longText('bottom_body_content')->nullable(true);
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
