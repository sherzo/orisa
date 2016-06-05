<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandsHasDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands_has_drinks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_command') ->unsigned();
            $table->foreign('id_command') ->references('id')->on('commands');
            $table->integer('id_drink') ->unsigned();
            $table->foreign('id_drink') ->references('id')->on('drinks');
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
        Schema::drop('commands_has_drinks');
    }
}
