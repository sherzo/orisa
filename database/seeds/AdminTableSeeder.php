<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('users')->insert(array (
            'name' => 'Saul',
        	'user' => 'admin',
        	'password' => \Hash::make('admin'),      	
        	'email' => 'sherzo-b@hotmail.com',
        	'type' => 'admin'
        ));



    }
}
