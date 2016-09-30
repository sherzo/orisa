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
            'rif'          => 'J-00006372-9',
            'razon_social' => 'Alimentos Polar Comercial, C.A.',
            'direccion'    => 'Turmero, Aragua',
            'operadora'    => '0800',
            'telefono'     => '3728242',
            'correo'       => 'carola.valdivia@fundacionempresaspolar.org',
        ));

      	\DB::table('providers')->insert(array (
            'rif'          => 'J-00032569-3',
            'razon_social' => 'C.A. Ron Santa teresa',
            'direccion'    => 'El consejo',
            'operadora'    => '0800',
            'telefono'     => '4002598',
            'correo'       => 'info@fundacionsantateresa.org',
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
