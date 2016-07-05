<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run()
    {
        $faker = Faker::create();
        
        for($i=0; $i < 15; $i++) {

        \DB::table('employees')->insert(array (

        	'dni'              => $faker->randomElement($array = array('V','E')).'-'.$faker->randomNumber($nbDigits = 8),
            'nombres_em'       => $faker->firstName,
            'apellidos_em'     => $faker->lastName,
            'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
         	'estado_civil'     => $faker->randomElement($array = array('Casado/a','Soltero/a', 'Viudo/a', 'Divorciado/a', 'Comprometido/a')),
        	'direccion_em'        => $faker->address,
        	'pais_em'          => $faker->country,
        	'estado_em'        => $faker->state,
        	'ciudad_em'        => $faker->city,
        	'telefono_em'      => $faker->tollFreePhoneNumber,
        	'genero'           => $faker->randomElement($array = array('Masculino','Femenino')),
        ));

        }

    }
}
