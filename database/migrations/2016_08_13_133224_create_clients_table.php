<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni_cedula', 15)->unique();
            $table->string('nombres', 25);
            $table->string('apellidos', 25);
            $table->text('direccion');
            $table->integer('operadora');
            $table->string('telefono', 10);
            $table->string('tipo')->default('regular');
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
        Schema::drop('clients');
    }
}
