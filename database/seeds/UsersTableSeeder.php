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
        	'type' => 'user'
        ));

        }

    }
}

