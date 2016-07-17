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
            $table->integer('employee_id') ->unsigned();
            $table->integer('shift_id')    ->unsigned();
            $table->date('fecha_inicio');
            $table->date('fecha_culminacion');      
            $table->foreign('employee_id') ->references('id')->on('employees')->onDelete('Cascade');
            $table->foreign('shift_id')    ->references('id')->on('shifts')->onDelete('Cascade');
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
