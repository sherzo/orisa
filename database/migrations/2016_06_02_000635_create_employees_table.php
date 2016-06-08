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
            $table->string('nationality_em', 15);
            $table->bigInteger('document_em');
            $table->date('birthdate_em');
            $table->string('country_em', 45);
            $table->text('addres_em');
            $table->string('names_em', 45);
            $table->string('civil_status_em', 45);
            $table->string('state_em', 45);
            $table->bigInteger('phone_em');
            $table->string('surnames_em', 45);
            $table->string('gender_em', 45);
            $table->string('city_em', 45);
            $table->string('email_em', 45);
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
