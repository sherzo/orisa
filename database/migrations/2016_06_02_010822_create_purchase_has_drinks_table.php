<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseHasDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_has_drinks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_drink') ->unsigned();
            $table->foreign('id_drink') ->references('id')->on('drinks');
            $table->integer('id_purchase') ->unsigned();
            $table->foreign('id_purchase') ->references('id')->on('purchases');
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
        Schema::drop('purchase_has_drinks');
    }
}
