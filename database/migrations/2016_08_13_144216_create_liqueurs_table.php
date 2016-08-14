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
            $table->integer('tlicor_id') ->unsigned();
            $table->foreign('tlicor_id') ->references('id')->on('liqueurs_types');
            $table->integer('id_unit') ->unsigned();
            $table->foreign('id_unit') ->references('id')->on('units');
            $table->string('nombre_licor');
            $table->string('caracteristica', 30);
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
