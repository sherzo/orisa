<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeHasShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_has_shifts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_employee') ->unsigned();
            $table->foreign('id_employee') ->references('id')->on('employees')->onDelete('Cascade');
            $table->integer('id_shift')    ->unsigned();
            $table->foreign('id_shift')    ->references('id')->on('shifts')->onDelete('Cascade');   
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
        Schema::drop('employee_has_shifts');
    }
}
