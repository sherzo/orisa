<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiqueursTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liqueurs_types', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user') ->unsigned();
            $table->foreign('id_user') ->references('id')->on('users');
            $table->string('type_name', 15);
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
        Schema::drop('liqueurs_types');
    }
}
