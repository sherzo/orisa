<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandsHasBeverages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands_has_beverages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('command_id')->unsigned();
            $table->foreign('command_id')->references('id')->on('commands')->onDelete('Cascade');
            $table->integer('beverage_id')->unsigned();
            $table->foreign('beverage_id')->references('id')->on('beverages')->onDelete('Cascade');
            $table->boolean('estatus')->default(false);
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
        Schema::drop('commands_has_beverages');
    }
}
