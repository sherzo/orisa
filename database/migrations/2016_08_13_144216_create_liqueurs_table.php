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
            $table->integer('type_id') ->unsigned();
            $table->foreign('type_id') ->references('id')->on('liqueurs_types');
            $table->integer('id_unit') ->unsigned();
            $table->foreign('id_unit') ->references('id')->on('units');
            $table->string('licor');
            $table->float('stock');
            $table->string('caracteristica', 30);
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
        Schema::drop('liqueurs');
    }
}
