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
            $table->string('username',100);
            $table->string('password',100);
            $table->string('firstname',100);
            $table->string('lastname',100);
            $table->string('email',500);
            $table->bigInteger('credit')->default('200000');
            $table->bigInteger('phonenumber');
            $table->timestamp('email_verifed_at')->nullable();
            $table->string('role',100)->default('user');
            $table->rememberToken();
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
