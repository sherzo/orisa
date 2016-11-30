<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatesHasLiqueursTable extends Migration
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
            $table->integer('plate_id')->unsigned();
            $table->foreign('plate_id')->references('id')->on('plates')->onDelete('Cascade');
            $table->integer('liqueur_id')->unsigned();
            $table->foreign('liqueur_id')->references('id')->on('ingredients')->onDelete('Cascade');
            $table->float('cantidad_licor');
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
        Schema::drop('plates_has_liqueurs');
    }
}
