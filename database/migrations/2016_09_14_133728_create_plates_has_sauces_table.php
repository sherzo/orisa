<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatesHasSaucesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plates_has_sauces', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salsa_id')->unsigned();
            $table->foreign('salsa_id')->references('id')->on('sauces')->onDelete('Cascade');
            $table->integer('plato_id')->unsigned();
            $table->foreign('plato_id')->references('id')->on('plates')->onDelete('Cascade');
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
         Schema::drop('plates_has_sauces');
    }
}
