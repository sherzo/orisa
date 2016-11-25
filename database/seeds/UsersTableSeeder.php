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

        for($i=0; $i < 30; $i++)
        {

            \DB::table('users')->insert(array (
                'roles_id' => '7',
                'name'     => $faker->firstName,
                'user'     => $faker->unique()->firstName,
                'password' => \Hash::make('123456'),
                'email'    => $faker->unique()->email,
            ));
        }

        \DB::table('users')->insert(array (
            'roles_id' => '1',
            'name'     => 'Saul',
            'user'     => 'root',
            'password' => \Hash::make('root'),
            'email'    => 'sherzo-b@hotmail.com',
        ));



        \DB::table('users')->insert(array (
            'roles_id' => '1',
            'name'     => 'Jesus',
            'user'     => 'admin',
            'password' => \Hash::make('admin'),
            'email'    => 'mtr_1101@hotmail.com',
        ));

        \DB::table('users')->insert(array (
            'roles_id' => '2',
            'name'     => 'Admin',
            'user'     => 'Aministrador',
            'password' => \Hash::make('administrador'),
            'email'    => 'sherzo-la@hotmail.com',
        ));

        \DB::table('users')->insert(array (
            'roles_id' => '3',
            'name'     => 'Encargado',
            'user'     => 'encargado',
            'password' => \Hash::make('encargado'),
            'email'    => 'sherzo-p@hotmail.com',
        ));

        \DB::table('users')->insert(array (
            'roles_id' => '4',
            'name'     => 'Cocinero',
            'user'     => 'cocinero',
            'password' => \Hash::make('cocinero'),
            'email'    => 'sherzo-g@hotmail.com',
        ));

        \DB::table('users')->insert(array (
            'roles_id' => '5',
            'name'     => 'Cajera',
            'user'     => 'cajera',
            'password' => \Hash::make('cajera'),         
            'email'    => 'sherzo-f@hotmail.com',
        ));


        \DB::table('users')->insert(array (
            'roles_id' => '6',
            'name'     => 'Mesonero',
            'user'     => 'mesonero',
            'password' => \Hash::make('mesonero'),
            'email'    => 'sherzo-c@hotmail.com',
        ));


        \DB::table('users')->insert(array (
            'roles_id' => '7',
            'name'     => 'Cliente',
            'user'     => 'cliente',
            'password' => \Hash::make('cliente'),
            'email'    => 'sherzo-a@hotmail.com',
        ));

    }
}
