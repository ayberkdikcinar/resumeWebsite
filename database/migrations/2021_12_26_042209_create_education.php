<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducation extends Migration
{   

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('education_level')->nullable(false);
            $table->string('school')->nullable(false);
            $table->date('from_time')->nullable(false); ///its just includes year. so format should be (yy)
            $table->date('to_time')->nullable(false); //its just includes year. so format should be (yy)
            $table->string('degree');
            $table->string('area_of_study');
            $table->string('location')->nullable(false);
            $table->longText('activities_societies')->nullable(true);
            $table->longText('description')->nullable(true);
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('educations');
    }
}
