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
            $table->increments('id');
            $table->string('from',100);
            $table->string('to',100);
            $table->bigInteger('amount');
            $table->bigInteger('capacity');
            $table->string('departuredate',100);
            $table->string('returndate',100);
            $table->string('timewent',100);
            $table->string('timeback',100);
            $table->string('tag',100);
            $table->string('image',500);
            $table->boolean('sale')->default(0);
            $table->string('type',20);
            $table->integer('staytime');
            $table->string('travelcompany',100);
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
