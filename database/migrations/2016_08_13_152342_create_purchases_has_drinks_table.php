<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesHasDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases_has_drinks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bebida_id')->unsigned();
            $table->foreign('bebida_id')->references('id')->on('drinks')->onDelete('Cascade');
            $table->integer('compra_id')->unsigned();
            $table->foreign('compra_id')->references('id')->on('purchases')->onDelete('Cascade');
            $table->integer('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('purchases_has_drinks');
    }
}
