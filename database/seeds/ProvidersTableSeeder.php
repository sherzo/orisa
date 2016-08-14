<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
        
      	\DB::table('providers')->insert(array (
            'rif'          => 'J-25607793',
            'razon_social' => 'Alimentos polar',
            'direccion'    => 'Remavenca, turmero',
            'operadora'    => '0412',
            'telefono'     => '04144740599',
            'correo'       => 'polar@hotmail.com',
        ));

      	\DB::table('providers')->insert(array (
            'rif'          => 'J-24420646',
            'razon_social' => 'Santa teresa',
            'direccion'    => 'El consejo',
            'operadora'    => '0412',
            'telefono'     => '04145899312',
            'correo'       => 'santa-teresa@gmail.com',
        ));

        for ($i=0; $i<7; $i++) 
        { 
       		\DB::table('providers')->insert(array (
                'rif'          => $faker->randomElement($array = array ('J','C','G')).'-'.$faker->numberBetween($min = 200000000, $max = 25000000),
                'razon_social' => $faker->firstName,
                'direccion'    => $faker->address,
                'operadora'    => '0412',
                'telefono'     => $faker->ean8,
                'correo'       => $faker->email,
        ));

	   }
    }
}
