<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiqueursWithJuicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liqueurs_with_juices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('licor_id')->unsigned();
            $table->foreign('licor_id')->references('id')->on('liqueurs')->onDelete('Cascade');
            $table->integer('jugo_id')->unsigned();
            $table->foreign('jugo_id')->references('id')->on('juices')->onDelete('Cascade');
            $table->integer('mezcla_id')->unsigned();
            $table->foreign('mezcla_id')->references('id')->on('mixture_with_liqueurs')->onDelete('Cascade');
            $table->integer('cantidad_licor');
            $table->integer('cantidad_jugo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('liqueurs_with_juices');
    }
}
