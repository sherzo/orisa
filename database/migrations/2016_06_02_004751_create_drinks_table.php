<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user') ->unsigned();
            $table->foreign('id_user') ->references('id')->on('users');
            $table->string('drink_name');
            $table->double('drink_price', 15,2);
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
        Schema::drop('drinks');
    }
}
