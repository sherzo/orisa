<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_deductions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_deduction') ->unsigned();
            $table->foreign('id_deduction') ->references('id')->on('deductions')->onDelete('Cascade');
            $table->string('name_other');
            $table->double('percentage_other', 15,2);
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
        Schema::drop('other_deductions');
    }
}
