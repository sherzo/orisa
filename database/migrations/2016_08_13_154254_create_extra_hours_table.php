<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_hours', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('turno_id')->unsigned();
            $table->foreign('turno_id')->references('id')->on('turns');
            $table->double('valor_turno', 10,2);
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
        Schema::drop('extra_hours');
    }
}
