<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrinksHasLiqueurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks_has_liqueurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bebida_id')->unsigned();
            $table->foreign('bebida_id')->references('id')->on('drinks')->onDelete('Cascade');
            $table->integer('licor_id')->unsigned();
            $table->foreign('licor_id')->references('id')->on('liqueurs')->onDelete('Cascade');
            $table->integer('cantidad_licor');
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
        Schema::drop('drinks_has_liqueurs');
    }
}
