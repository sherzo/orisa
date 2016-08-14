<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersHasLiqueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers_has_liqueurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('licor_id')->unsigned();
            $table->foreign('licor_id')->references('id')->on('liqueurs')->onDelete('Cascade');
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
        Schema::drop('providers_has_liqueurs');
    }
}
