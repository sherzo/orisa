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
            $table->integer('document_em');
            $table->date('birthdate_em');
            $table->string('country_em', 10);
            $table->text('addres_em');
            $table->string('names_em', 30);
            $table->string('civil_status_em', 30);
            $table->string('state_em', 10);
            $table->integer('phone_em');
            $table->string('surnames_em', 30);
            $table->string('gender_em', 10);
            $table->string('city_em', 10);
            $table->string('email_em', 10);
            $table->integer('id_position') ->unsigned();
            $table->foreign('id_position') ->references('id')->on('positions');
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
