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
            $table->string('code_em', 45);
            $table->date('date_of_admission');
            $table->string('contract_status', 45);
            $table->string('cestaticket', 15);
            $table->integer('duration_em');
            $table->string('bank', 35);
            $table->string('type_account', 20);
            $table->text('account_em');
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
