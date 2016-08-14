<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandsHasDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands_has_drinks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comanda_id')->unsigned();
            $table->foreign('comanda_id')->references('id')->on('commands')->onDelete('Cascade');
            $table->integer('bebida_id')->unsigned();
            $table->foreign('bebida_id')->references('id')->on('drinks')->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('commands_has_drinks');
    }
}
