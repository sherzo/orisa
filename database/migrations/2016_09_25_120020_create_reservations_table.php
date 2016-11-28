<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->integer('table_id')->unsigned();
            $table->foreign('table_id')->references('id')->on('tables');
            $table->date('fecha_solicitud');
            $table->date('fecha_reservacion');
            $table->time('hora_reservacion');
            $table->text('especificacion');
            $table->string('estatus')->default('Sin confirmar');
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
        Schema::drop('reservations');
    }
}
