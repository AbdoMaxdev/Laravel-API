<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUseractivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('useractivities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('listevent')->default(null);
            $table->string('listeventinvitation')->default(null);
            $table->string('localisation')->default(null);
            $table->string('friends')->default(null);
            $table->string('friendsinvitation')->default(null);
            $table->string('groups')->default(null);
            $table->string('groupsinvitation')->default(null);
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
        Schema::dropIfExists('useractivities');
    }
}
