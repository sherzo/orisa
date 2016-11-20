<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayrollsDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payrolls_deductions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomina_id')->unsigned();
            $table->foreign('nomina_id')->references('id')->on('payrolls_made');
            $table->integer('deducciones_id')->unsigned();
            $table->foreign('deducciones_id')->references('id')->on('deductions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payrolls_deductions');
    }
}
