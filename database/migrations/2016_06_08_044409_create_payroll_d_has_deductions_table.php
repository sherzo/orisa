<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayrollDHasDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payroll_d_has_deductions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_finished_payroll') ->unsigned();
            $table->foreign('id_finished_payroll') ->references('id')->on('finished_payrolls')->onDelete('Cascade');
            $table->integer('id_deduction') ->unsigned();
            $table->foreign('id_deduction') ->references('id')->on('deductions')->onDelete('Cascade');
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
        Schema::drop('payroll_d_has_deductions');
    }
}
