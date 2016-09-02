<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Faker\Provider\Image;

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
        
        for($i=0; $i < 10; $i++) {

        \DB::table('employees')->insert(array (
            'cargo_id'         => $faker->randomElement($array = array('1','2')),
            'turno_id'         => $faker->randomElement($array = array('1','2')),
            'url'              => $faker->imageUrl($width = 640, $height = 480),
        	'dni_cedula'       => $faker->randomElement($array = array('V','E')).'-'.$faker->randomNumber($nbDigits = 8),
            'nombres'          => $faker->firstName,
            'apellidos'        => $faker->lastName,
            'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
         	'estado_civil'     => $faker->randomElement($array = array('Casado/a','Soltero/a', 'Viudo/a', 'Divorciado/a', 'Comprometido/a')),
        	'direccion'        => $faker->address,
        	'telefono'         => $faker->tollFreePhoneNumber,
        	'genero'           => $faker->randomElement($array = array('Masculino','Femenino')),
        ));

        }

    }
}
