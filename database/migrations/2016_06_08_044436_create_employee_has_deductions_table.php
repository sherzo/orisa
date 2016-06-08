<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeHasDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_has_deductions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_employee') ->unsigned();
            $table->foreign('id_employee') ->references('id')->on('employees');
            $table->integer('id_f_payroll_deduction') ->unsigned();
            $table->foreign('id_f_payroll_deduction') ->references('id')->on('payroll_d_has_deductions')->onDelete('Cascade');
            $table->timestamps();
        });
    }    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee_has_deductions');
    }
}
