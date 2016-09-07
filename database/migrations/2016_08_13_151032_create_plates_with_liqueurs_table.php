<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatesWithLiqueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plates_has_liqueurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plato_id')->unsigned();
            $table->foreign('plato_id')->references('id')->on('plates')->onDelete('Cascade');
            $table->integer('licor_id')->unsigned();
            $table->foreign('licor_id')->references('id')->on('liqueurs')->onDelete('Cascade');
            $table->integer('cantidad_licor');
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
        Schema::drop('plates_has_liqueurs');
    }
}
