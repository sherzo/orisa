<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersVip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('users_vip', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id') ->unsigned();
            $table->foreign('user_id') ->references('id')->on('users');
            $table->integer('client_id') ->unsigned();
            $table->foreign('client_id') ->references('id')->on('clients');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::drop('users_vip');*/
    }
}
