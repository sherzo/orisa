<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandsHasLiqueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands_has_liqueurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_command') ->unsigned();
            $table->foreign('id_command') ->references('id')->on('commands');
            $table->integer('id_liqueur') ->unsigned();
            $table->foreign('id_liqueur') ->references('id')->on('drinks');
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
        Schema::drop('commands_has_liqueurs');
    }
}
