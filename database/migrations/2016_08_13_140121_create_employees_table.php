<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cargo_id')->unsigned();
            $table->foreign('cargo_id')->references('id')->on('positions');
            $table->integer('turno_id')->unsigned();
            $table->foreign('turno_id')->references('id')->on('turns');
            $table->string('url', 255)->unique();
            $table->string('dni_cedula', 15)->unique();
            $table->string('nombres', 45);
            $table->string('apellidos', 45);
            $table->date('fecha_nacimiento');
            $table->string('estado_civil', 45);
            $table->text('direccion');
            $table->string('telefono', 15);
            $table->string('genero', 10);
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
        Schema::drop('employees');
    }
}
