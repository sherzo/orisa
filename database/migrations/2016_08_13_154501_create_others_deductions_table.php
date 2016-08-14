<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOthersDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('others_deductions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('deduccion_id') ->unsigned();
            $table->foreign('deduccion_id') ->references('id')->on('deductions')->onDelete('Cascade');
            $table->string('nombre');
            $table->double('valor', 15,2);
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
        Schema::drop('others_deductions');
    }
}
