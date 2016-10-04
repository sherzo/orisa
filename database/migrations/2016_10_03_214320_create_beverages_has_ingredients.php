<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeveragesHasIngredients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beverages_has_ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('beverage_id')->unsigned();
            $table->foreign('beverage_id')->references('id')->on('beverages')->onDelete('Cascade');
            $table->integer('ingredient_id')->unsigned();
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('Cascade');
            $table->integer('cantidad_ingrediente');
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
        Schema::drop('beverages_has_ingredients');
    }
}
