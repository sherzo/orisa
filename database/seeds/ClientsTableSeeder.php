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

        for ($i=0; $i<10; $i++) 
        { 
       	    \DB::table('clients')->insert(array (
			    'dni_cedula' => $faker->randomElement($array = array ('V', 'E')).'-'.$faker->numberBetween($min = 200000000, $max = 25000000),
			    'nombres'    => $faker->firstName,
                'apellidos'  => $faker->lastName,
			    'direccion'  => $faker->address,
                'operadora'  => $faker->buildingNumber,
			    'telefono'   => $faker->ean8,
            ));
        }
    }
}