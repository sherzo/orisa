<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaucesHasIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sauces_has_ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sauce_id')->unsigned();
            $table->foreign('sauce_id')->references('id')->on('sauces')->onDelete('Cascade');
            $table->integer('ingredient_id')->unsigned();
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('Cascade');
            $table->integer('cantidad_ingrediente');
            $table->integer('unidad_id')->unsigned();
            $table->foreign('unidad_id')->references('id')->on('units')->onDelete('Cascade');
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
        Schema::drop('sauces_has_ingredients');
    }
}
