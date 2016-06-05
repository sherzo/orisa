<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlateHasLiqueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plate_has_liqueurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_liqueur') ->unsigned();
            $table->foreign('id_liqueur') ->references('id')->on('liqueurs');
            $table->integer('id_plate') ->unsigned();
            $table->foreign('id_plate') ->references('id')->on('plates');
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
        Schema::drop('plate_has_liqueurs');
    }
}
