<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name');
            $table->string('userName')->unique();
            $table->string('email')->unique();
            $table->integer('emailAnswer');
            $table->string('picture')->nullable();
            $table->string('banner')->nullable();
            $table->text('info')->nullable();
            $table->text('country')->nullable();
            $table->text('flag')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('group')->default('0');
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
