<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->nullable(false)->unique();
            $table->string('password')->nullable(false);
            $table->string('email')->nullable(false)->unique();
            $table->string('phone')->nullable(true);
            $table->string('name')->nullable(true);
            $table->string('surname')->nullable(true);
            $table->date('date_of_birth')->nullable(true);
            $table->string('country_of_birth')->nullable(true);
            $table->string('country_of_residence')->nullable(true);
            $table->string('marital_status')->nullable(true);
            $table->string('current_position')->nullable(true);
            $table->longText('about')->nullable(true);
            $table->string('photo_url')->nullable(true);
            $table->boolean('isAdmin')->nullable(false)->default(false);
            //$table->timestamp('email_verified_at')->nullable();
            //$table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
