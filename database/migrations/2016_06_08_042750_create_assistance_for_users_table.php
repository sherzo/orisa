<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssistanceForUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistance_for_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_employee') ->unsigned();
            $table->integer('daily attendances') ->unsigned();
            $table->time('check_in_times');
            $table->time('departure_time');
            $table->string('justification', 45);
            $table->text('reason');
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
        Schema::drop('assistance_for_users');
    }
}
