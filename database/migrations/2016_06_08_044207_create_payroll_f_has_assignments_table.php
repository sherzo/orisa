<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayrollFHasAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payroll_f_has_assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_finished_payroll') ->unsigned();
            $table->foreign('id_finished_payroll') ->references('id')->on('finished_payrolls')->onDelete('Cascade');
            $table->integer('id_assignment') ->unsigned();
            $table->foreign('id_assignment') ->references('id')->on('assignments')->onDelete('Cascade');
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
        Schema::drop('payroll_f_has_assignments');
    }
}
