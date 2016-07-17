<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeHasPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_has_positions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('position_id') ->unsigned();
            $table->integer('employee_id') ->unsigned();
            $table->foreign('employee_id') ->references('id')->on('employees')->onDelete('Cascade');
            $table->foreign('position_id') ->references('id')->on('positions')->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee_has_positions');
    }
}
