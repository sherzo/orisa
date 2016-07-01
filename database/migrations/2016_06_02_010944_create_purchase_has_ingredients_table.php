<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseHasIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_has_ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ingredient') ->unsigned();
            $table->foreign('id_ingredient') ->references('id')->on('ingredients')->onDelete('cascade');
            $table->integer('id_purchase') ->unsigned();
            $table->foreign('id_purchase') ->references('id')->on('purchases')->onDelete('cascade');
            $table->integer('cantidad');
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
        Schema::drop('purchase_has_ingredients');
    }
}
