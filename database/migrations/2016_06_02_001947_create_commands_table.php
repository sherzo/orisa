<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estatus', 10);
            $table->integer('id_table') ->unsigned();
            $table->foreign('id_table') ->references('id')->on('tables');
            $table->integer('id_receipt') ->unsigned();
            $table->foreign('id_receipt') ->references('id')->on('receipts');
            $table->integer('id_employees') ->unsigned();
            $table->foreign('id_employees') ->references('id')->on('employees');
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
        Schema::drop('commands');
    }
}
