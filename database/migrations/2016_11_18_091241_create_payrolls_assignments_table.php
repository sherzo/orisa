<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayrollsAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payrolls_assignments', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('nomina_id')->unsigned();
            $table->foreign('nomina_id')->references('id')->on('payrolls');
            $table->integer('asignacionesExtras_id')->unsigned();
            $table->foreign('asignacionesExtras_id')->references('id')->on('others_assignments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payrolls_assignments');
    }
}
