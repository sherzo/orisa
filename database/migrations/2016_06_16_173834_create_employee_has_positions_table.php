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
            $table->integer('id_employee') ->unsigned();
            $table->foreign('id_employee') ->references('id')->on('employees')->onDelete('cascade');
            $table->integer('id_position') ->unsigned();
            $table->foreign('id_position') ->references('id')->on('positions')->onDelete('cascade');
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
