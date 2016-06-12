<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlcoholMixturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alcohol_mixtures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mixture_name', 15);
            $table->text('mixture_description');
            $table->double('mixture_price');
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
        Schema::drop('alcohol_mixtures');
    }
}
