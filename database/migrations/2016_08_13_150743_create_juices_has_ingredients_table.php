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
            $table->integer('juice_id')->unsigned();
            $table->foreign('juice_id')->references('id')->on('juices')->onDelete('Cascade');
            $table->integer('ingredient_id')->unsigned();
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('Cascade');
            $table->float('cantidad_ingrediente');
            $table->integer('unit_id')->unsigned();
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('Cascade');
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
