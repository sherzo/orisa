<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandsHasJuicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands_has_juices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_command') ->unsigned();
            $table->foreign('id_command') ->references('id')->on('commands');
            $table->integer('id_juice') ->unsigned();
            $table->foreign('id_juice') ->references('id')->on('juices');
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
        Schema::drop('commands_has_juices');
    }
}
