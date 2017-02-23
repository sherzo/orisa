<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additional', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->enum('modo_pago', ['D','P','V']); // DIA - PORCENTAJE - VALOR
            $table->double('monto', 10,2);
            $table->enum('tipo', ['A','D']);
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
        Schema::drop('additional');
    }
}
