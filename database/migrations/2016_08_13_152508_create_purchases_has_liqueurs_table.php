<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesHasLiqueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases_has_liqueurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('licor_id')->unsigned();
            $table->foreign('licor_id')->references('id')->on('liqueurs')->onDelete('Cascade');
            $table->integer('compra_id')->unsigned();
            $table->foreign('compra_id')->references('id')->on('purchases')->onDelete('Cascade');
            $table->integer('cantidad');
            $table->double('precio', 10,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('purchases_has_liqueurs');
    }
}
