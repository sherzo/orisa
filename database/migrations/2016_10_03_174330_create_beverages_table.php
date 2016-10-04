<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeveragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beverages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trago', 15);
            $table->text('descripcion');
            $table->double('precio', 15,2);
            $table->integer('image_id') ->unsigned();
            $table->foreign('image_id') ->references('id')->on('images');
            
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
        Schema::drop('beverages');
    }
}
