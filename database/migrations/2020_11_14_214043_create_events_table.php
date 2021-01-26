<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameevent')->nullable()->default(null);
            $table->string('type')->nullable()->default(null);
            $table->string('group')->nullable()->default(null);
            $table->string('participants')->nullable()->default(null);
            $table->string('participant')->nullable()->default(null);
            $table->string('descrption')->nullable()->default(null);
            $table->string('leaderuser')->nullable()->default(null);
            $table->string('dateevent')->nullable()->default(null);
            $table->string('hourevenbegin')->nullable()->default(null);
            $table->string('hourevenfinish')->nullable()->default(null);
            $table->string('localisation')->nullable()->default(null);
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
        Schema::dropIfExists('events');
    }
}
