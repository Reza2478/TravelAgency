<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('tour_id');
            $table->string('from',100);
            $table->string('to',100);
            $table->bigInteger('amount');
            $table->string('departuredate',100);
            $table->string('returndate',100);
            $table->string('tag',100);
            $table->string('image',500);
            $table->boolean('lastmoment');
            $table->string('type',20);
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
        Schema::dropIfExists('tours');
    }
}
