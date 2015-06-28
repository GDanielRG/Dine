<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('location_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('photo');
            $table->boolean('vegetarian');
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

        Schema::create('food_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('food_id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->string('locale')->index();

            $table->unique(['food_id','locale']);
            $table->foreign('food_id')->references('id')->on('food')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('food');
        Schema::drop('food_translations');
    }
}
