<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_type')->unsigned();
            $table->foreign('id_type')->references('id')->on('ingredients_types');
            $table->integer('id_unit') ->unsigned();
            $table->foreign('id_unit') ->references('id')->on('units');
            $table->string('ingrediente', 15);
            $table->float('stock');
            $table->string('caracteristica', 40);
            $table->integer('stock_min');
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
        Schema::drop('ingredients');
    }
}
