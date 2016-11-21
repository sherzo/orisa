<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayrollDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payroll_deductions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomina_id')->unsigned();
            $table->foreign('nomina_id')->references('id')->on('payrolls_made');
            $table->integer('deduccionesExtras_id')->unsigned();
            $table->foreign('deduccionesExtras_id')->references('id')->on('others_deductions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payroll_deductions');
    }
}
