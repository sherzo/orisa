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
            $table->string('nombre_ingrediente', 15);
            $table->integer('id_type') ->unsigned();
            $table->foreign('id_type') ->references('id')->on('ingredients_types')->onDelete('cascade');
            $table->string('caracteristica', 40);
            $table->integer('id_unit') ->unsigned();
            $table->foreign('id_unit') ->references('id')->on('units')->onDelete('cascade');
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
