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

        /*for($i=0; $i < 30; $i++)
        {

            \DB::table('users')->insert(array (
                'roles_id' => '7',
                'name'     => $faker->firstName,
                'user'     => $faker->unique()->firstName,
                'password' => \Hash::make('123456'),
                'email'    => $faker->unique()->email,
            ));
        }*/

        \DB::table('users')->insert(array (
            'email'      => 'sherzo-b@hotmail.com',
            'password'   => \Hash::make('root'),
            'first_name' => 'SAUL EFRAIN',
            'last_name'  => 'FLOREZ HERNANDEZ',
        ));

        \DB::table('users')->insert(array (
            'email'      => 'mtr_1101@hotmail.com',
            'password'   => \Hash::make('root'),
            'first_name' => 'JESUS EDUARDO',
            'last_name'  => 'MATUTE RANGEL',
        ));

        \DB::table('users')->insert(array (
            'email'      => 'administrador@sefardi.com',
            'password'   => \Hash::make('administrador'),
            'first_name' => $faker->name,
            'last_name'  => $faker->lastName,
        ));

        \DB::table('users')->insert(array (
            'email'      => 'encargado@sefardi.com',
            'password'   => \Hash::make('encargado'),
            'first_name' => $faker->name,
            'last_name'  => $faker->lastName,
            
        ));

        \DB::table('users')->insert(array (
            'email'      => 'cocinero@sefardi.com',
            'password'   => \Hash::make('cocinero'),
            'first_name' => $faker->name,
            'last_name'  => $faker->lastName,
            
        ));

        \DB::table('users')->insert(array (
            'email'      => 'cajera@sefardi.com',
            'password'   => \Hash::make('cajera'),
            'first_name' => $faker->name,
            'last_name'  => $faker->lastName,
        ));


        \DB::table('users')->insert(array (
            'email'      => 'mesonero@sefardi.com',
            'password'   => \Hash::make('mesonero'),
            'first_name' => $faker->name,
            'last_name'  => $faker->lastName,
        ));


        \DB::table('users')->insert(array (
            'email'      => 'cliente@sefardi.com',
            'password'   => \Hash::make('cliente'),
            'first_name' => $faker->name,
            'last_name'  => $faker->lastName,
        ));



    }
}
