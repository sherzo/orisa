<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker::create();
        
        for($i=0; $i < 30; $i++) {


        \DB::table('users')->insert(array (
            'name' => $faker->firstName,
        	'user' => $faker->unique()->firstName,
        	'password' => \Hash::make('123456'),
        	'email' => $faker->unique()->email,
        	'type' => $faker->randomDigit(array('2', '3', '4', '5', '6'))
        ));

        }

        \DB::table('users')->insert(array (
            'name' => 'Jesus',
            'user' => 'admin',
            'password' => \Hash::make('admin'),         
            'email' => 'mtr_1101@hotmail.com',
            'type' => '2'
        ));

        \DB::table('users')->insert(array (
            'name' => 'Encargado',
            'user' => 'encargado',
            'password' => \Hash::make('encargado'),         
            'email' => 'sherzo-p@hotmail.com',
            'type' => '3'
        ));

        \DB::table('users')->insert(array (
            'name' => 'Cocinero',
            'user' => 'cocinero',
            'password' => \Hash::make('cocinero'),         
            'email' => 'sherzo-g@hotmail.com',
            'type' => '4'
        ));

        \DB::table('users')->insert(array (
            'name' => 'Cajera',
            'user' => 'cajera',
            'password' => \Hash::make('cajero'),         
            'email' => 'sherzo-f@hotmail.com',
            'type' => '5'
        ));


        \DB::table('users')->insert(array (
            'name' => 'Mesonero',
            'user' => 'mesonero',
            'password' => \Hash::make('mesonero'),         
            'email' => 'sherzo-c@hotmail.com',
            'type' => '6'
        ));


        \DB::table('users')->insert(array (
            'name' => 'Cliente',
            'user' => 'cliente',
            'password' => \Hash::make('cliente'),         
            'email' => 'sherzo-a@hotmail.com',
            'type' => '7'
        ));



    }
}

