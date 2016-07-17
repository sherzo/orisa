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
            $table->integer('employee_id') ->unsigned();
            $table->string('code_em', 45);
            $table->date('date_of_admission');
            $table->string('contract_status', 45);
            $table->string('cestaticket', 15);
            $table->integer('duration_em');
            $table->string('bank', 35);
            $table->string('type_account', 20);
            $table->text('account_em');
            $table->foreign('employee_id') ->references('id')->on('employees')->onDelete('Cascade');
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
