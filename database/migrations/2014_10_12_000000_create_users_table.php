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
            $table->increments('id');
            $table->string('username')->nullable()->default(null);
            $table->string('api_token',120)->nullable()->unique()->default(null);
            $table->string('password')->nullable()->default(null);
            $table->string('first_name')->nullable()->default(null)->nullable();
            $table->string('last_name')->nullable()->default(null)->nullable();
            $table->string('email',255)->nullable()->default(null);
            $table->string('imageuser')->nullable()->default(null);
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
