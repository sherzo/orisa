<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('id_user') ->unsigned();
            //$table->foreign('id_user') ->references('id')->on('users');
            $table->integer('document_em');
            $table->string('names_em', 30);
            $table->string('surnames_em', 30);
            $table->integer('phone_em');
            $table->text('addres_em');
            $table->string('gender_em', 10);
            $table->date('birthdate_em');
            $table->string('country_em', 10);
            $table->string('state_em', 10);
            $table->string('city_em', 10);
            //$table->integer('id_position') ->unsigned();
            //$table->foreign('id_position') ->references('id')->on('customers');
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
        Schema::drop('employees');
    }
}
