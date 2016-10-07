<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jugo', 15);
            $table->text('descripcion');
            $table->double('precio', 10,2);
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
        Schema::drop('juices');
    }
}