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
            $table->string('dni', 25)->unique();
            $table->string('nombres_em', 45);
            $table->string('apellidos_em', 45);
            $table->date('fecha_nacimiento');
            $table->string('estado_civil', 45);
            $table->text('direccion_em');
            $table->string('pais_em', 10);
            $table->string('estado_em', 10);
            $table->string('ciudad_em', 10);
            $table->string('telefono_em', 15);
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
