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
        	'user' => 'root',
        	'password' => \Hash::make('root'),      	
        	'email' => 'sherzo-b@hotmail.com',
        	'type' => '1'
        ));

    }
}
