<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanningsHasDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plannings_has_days', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('planificacion_id')->unsigned();
            $table->foreign('planificacion_id')->references('id')->on('plannings')->onDelete('Cascade');
            $table->date('dia');
            $table->string('estatus', 20); // [ Laborable, Libre, No-Laborable ]
            $table->string('detalle', 255); // [Detalle del porque día Inhábil]
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('plannings_has_days');
    }
}
