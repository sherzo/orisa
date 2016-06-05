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
            $table->integer('id_command') ->unsigned();
            $table->foreign('id_command') ->references('id')->on('commands');
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
        Schema::drop('commands_has_plates');
    }
}
