<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empleado_id')->unsigned();
            $table->foreign('empleado_id')->references('id')->on('employees')->onDelete('Cascade');
            $table->integer('asistencia_id')->unsigned();
            $table->foreign('asistencia_id')->references('id')->on('days_with_assistances')->onDelete('Cascade');
            $table->time('hora_entrada');
            $table->time('hora_salida');
            $table->string('motivo', 55);
            $table->text('justificacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('assistances');
    }
}
