<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayrollsAdditionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payrolls_additional', function (Blueprint $table){
            $table->increments('id');
            $table->integer('prenomina_id')->unsigned();
            $table->foreign('prenomina_id')->references('id')->on('payrolls')->onDelete('Cascade');
            $table->integer('adicional_id')->unsigned();
            $table->foreign('adicional_id')->references('id')->on('additional')->onDelete('Cascade');
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
        Schema::drop('payrolls_additional');
    }
}
