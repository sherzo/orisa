<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiqueursProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liqueurs_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_liqueur') ->unsigned();
            $table->foreign('id_liqueur') ->references('id')->on('liqueurs');
            $table->integer('id_provider') ->unsigned();
            $table->foreign('id_provider') ->references('id')->on('providers');
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
        Schema::drop('liqueurs_providers');
    }
}
