<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayrollsMadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payrolls_made', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->string('cedula', 20);
            $table->string('nombre_completo', 50);
            $table->string('cargo', 20);
            $table->float('salario_d', 8,2);
            $table->float('salario_m', 8,2);
            $table->float('asignaciones_ext', 20,2);
            $table->float('deducciones_ext', 20,2);
            $table->float('islr', 8,2);
            $table->float('sso', 8,2);
            $table->float('rpe', 8,2);
            $table->float('rpvh', 8,2);
            $table->integer('laborados');
            $table->integer('no_laborados');
            $table->float('cestaticket', 20,2);
             $table->float('cestaticket_des', 20,2);
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
        Schema::drop('payrolls_made');
    }
}
