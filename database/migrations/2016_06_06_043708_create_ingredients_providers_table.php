<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ingredient') ->unsigned();
            $table->foreign('id_ingredient') ->references('id')->on('ingredients')->onDelete('cascade');
            $table->integer('id_provider') ->unsigned();
            $table->foreign('id_provider') ->references('id')->on('providers')->onDelete('cascade');
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
        Schema::drop('ingredients_providers');
    }
}
