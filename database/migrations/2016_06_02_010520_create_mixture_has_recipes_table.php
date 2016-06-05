<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMixtureHasRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mixture_has_recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mixture_quiantity');
            $table->integer('id_mixture') ->unsigned();
            $table->foreign('id_mixture') ->references('id')->on('alcohol_mixtures');
            $table->integer('id_liqueur') ->unsigned();
            $table->foreign('id_liqueur') ->references('id')->on('liqueurs');
            $table->integer('id_juice') ->unsigned();
            $table->foreign('id_juice') ->references('id')->on('juices');
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
        Schema::drop('mixture_has_recipes');
    }
}
