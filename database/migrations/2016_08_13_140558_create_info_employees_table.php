<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empleado_id')->unsigned();
            $table->foreign('empleado_id')->references('id')->on('employees')->onDelete('Cascade');
            $table->string('codigo', 45)->unique();
            $table->date('fecha_de_admision');
            $table->string('contrato', 45);
            $table->integer('duracion');
            $table->string('cestaticket', 15);
            $table->string('banco', 35);
            $table->string('cuenta_tipo', 20);
            $table->string('cuenta_numero', 255)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('info_employees');
    }
}
