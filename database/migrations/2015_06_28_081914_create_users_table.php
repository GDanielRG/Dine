<?php

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
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('location_id')->unsigned();
            $table->integer('locale_id')->unsigned();
            $table->string('name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->boolean('vegetarian');
            $table->string('phone');
            $table->date('birth_date');
            $table->boolean('auto');
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('locale_id')->references('id')->on('locales')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
