<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_user', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('location_id')->unsigned();
            $table->integer('option_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->boolean('served');
            $table->timestamps();

            $table->unique(['option_id','user_id']);
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('option_user');
    }
}
