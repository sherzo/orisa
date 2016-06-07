<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_employee') ->unsigned();
            $table->foreign('id_employee') ->references('id')->on('employees');
            $table->string('code_em', 10);
            $table->date('date_of_admission');
            $table->bigInteger('account_em');
            $table->string('contract', 10);
            $table->string('contract_status', 10);
            $table->string('cestaticket', 10);
            $table->integer('roster_em');
            $table->integer('duration_em');
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
        Schema::drop('data_employees');
    }
}
