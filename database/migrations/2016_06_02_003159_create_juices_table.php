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
            $table->integer('id_user') ->unsigned();
            $table->foreign('id_user') ->references('id')->on('users');
            $table->string('juices_name', 15);
            $table->text('description_juices');
            $table->double('juices_price', 10,2);
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
