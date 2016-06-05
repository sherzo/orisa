<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiqueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liqueurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user') ->unsigned();
            $table->foreign('id_user') ->references('id')->on('users');
            $table->string('liqueur_name');
            $table->integer('id_type') ->unsigned();
            $table->foreign('id_type') ->references('id')->on('liqueurs_types');
            $table->integer('id_unit') ->unsigned();
            $table->foreign('id_unit') ->references('id')->on('units');
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
        Schema::drop('liqueurs');
    }
}
