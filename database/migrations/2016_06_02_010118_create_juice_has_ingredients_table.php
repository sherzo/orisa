<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuiceHasIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juice_has_ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('juice_quantity');
            $table->integer('id_juice') ->unsigned();
            $table->foreign('id_juice') ->references('id')->on('juices');
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
        Schema::drop('juice_has_ingredients');
    }
}
