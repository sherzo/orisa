<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersHasDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers_has_drinks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bebida_id')->unsigned();
            $table->foreign('bebida_id')->references('id')->on('drinks')->onDelete('Cascade');
            $table->integer('proveedor_id')->unsigned();
            $table->foreign('proveedor_id')->references('id')->on('providers')->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('providers_has_drinks');
    }
}
