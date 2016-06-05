<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlateHasIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plate_has_ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ingredient_quantity');
            $table->integer('id_plate') ->unsigned();
            $table->foreign('id_plate') ->references('id')->on('plates');
            $table->integer('id_ingredient') ->unsigned();
            $table->foreign('id_ingredient') ->references('id')->on('ingredients');
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
        Schema::drop('plate_has_ingredients');
    }
}
