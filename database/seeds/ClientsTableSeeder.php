<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
      	$faker = Faker::create();

        for ($i=0; $i<7; $i++) 
        { 
       		\DB::table('clients')->insert(array (
			'cedula' => $faker->randomElement($array = array ('V', 'E')).'-'.$faker->numberBetween($min = 200000000, $max = 25000000),
			'nombre' => $faker->firstName,
			'direccion' => $faker->address,
			'telefono' => $faker->ean8,
			'correo' => $faker->email,
            ));
        }
    }
}