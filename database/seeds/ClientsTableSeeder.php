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
			    'nombre'    => $faker->firstName.' '.$faker->lastName,
			    'direccion'  => $faker->address,
                'operadora'  => $faker->buildingNumber,
			    'telefono'   => $faker->ean8,
            ));
        }

        \DB::table('clients')->insert(array (
                'dni_cedula' => 'V-25607793',
                'nombre'    => 'Saul',
                'direccion'  => 'Calle 5 marzo #30-11',
                'operadora'  => '0414',
                'telefono'   => '5899312',
        ));

        \DB::table('clients')->insert(array (
                'dni_cedula' => 'V-25607794',
                'nombre'    => 'Cliente',
                'direccion'  => 'Calle 5 marzo #30-11',
                'operadora'  => '0414',
                'telefono'   => '5899312',
        ));

        \DB::table('clients')->insert(array (
                'dni_cedula' => 'V-25607795',
                'nombre'    => 'Carlos',
                'direccion'  => 'Calle 5 marzo #30-11',
                'operadora'  => '0424',
                'telefono'   => '5899312',
        ));

        \DB::table('users_vip')->insert(array (
          'user_id' => '37',
          'client_id' => '13'
        ));
    }
}
