<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesHasPlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_has_plannings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empleado_id')->unsigned();
            $table->foreign('empleado_id')->references('id')->on('employees')->onDelete('Cascade');
            $table->integer('turno_id')->unsigned();
            $table->foreign('turno_id')->references('id')->on('turns')->onDelete('Cascade');
            $table->integer('planificacion_id')->unsigned();
            $table->foreign('planificacion_id')->references('id')->on('plannings')->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees_has_plannings');
    }
}
