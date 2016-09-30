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
            $table->integer('id_unit') ->unsigned();
            $table->foreign('id_unit') ->references('id')->on('units');            
            $table->string('bebida', 20);
            $table->double('precio', 15,2);
            $table->integer('stock');
            $table->text('caracteristica');
            $table->integer('stock_min');
            //$table->integer('image_id') ->unsigned();
            //$table->foreign('image_id') ->references('id')->on('images');
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

