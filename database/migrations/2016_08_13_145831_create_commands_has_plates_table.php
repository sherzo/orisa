<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandsHasPlatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands_has_plates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comanda_id')->unsigned();
            $table->foreign('comanda_id')->references('id')->on('commands')->onDelete('Cascade');
            $table->integer('plato_id')->unsigned();
            $table->foreign('plato_id')->references('id')->on('plates')->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('commands_has_plates');
    }
}
