<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatesHasIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plates_has_ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plato_id')->unsigned();
            $table->foreign('plato_id')->references('id')->on('plates')->onDelete('Cascade');
            $table->integer('ingrediente_id')->unsigned();
            $table->foreign('ingrediente_id')->references('id')->on('ingredients')->onDelete('Cascade');
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
        Schema::drop('plates_has_ingredients');
    }
}
