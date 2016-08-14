<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuicesHasIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juices_has_ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jugo_id')->unsigned();
            $table->foreign('jugo_id')->references('id')->on('juices')->onDelete('Cascade');
            $table->integer('ingrediente_id')->unsigned();
            $table->foreign('ingrediente_id')->references('id')->on('ingredients')->onDelete('Cascade');
            $table->integer('cantidad_fruta');
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
        Schema::drop('juices_has_ingredients');
    }
}
