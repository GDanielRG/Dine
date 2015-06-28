<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('location_id')->unsigned();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('priority');
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
        });

        Schema::create('notification_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('notification_id')->unsigned();
            $table->string('title');
            $table->string('message');
            $table->string('locale')->index();

            $table->unique(['notification_id','locale']);
            $table->foreign('notification_id')->references('id')->on('notifications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notifications');
        Schema::drop('notification_translations');
    }
}
