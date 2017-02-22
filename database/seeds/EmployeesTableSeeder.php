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
        	'dni_cedula'       => $faker->randomElement($array = array('V','E')).'-'.$faker->randomNumber($nbDigits = 8),
            'nombres'          => $faker->firstName,
            'apellidos'        => $faker->lastName,
            'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
         	'estado_civil'     => $faker->randomElement($array = array('Casado/a','Soltero/a', 'Viudo/a', 'Divorciado/a', 'Comprometido/a')),
        	'direccion'        => $faker->address,
        	'telefono'         => $faker->tollFreePhoneNumber,
        	'genero'           => $faker->randomElement($array = array('Masculino','Femenino')),
        ));

        \DB::table('info_employees')->insert(array (
            'empleado_id'       => $i+1,
            'codigo'            => '00000'.$i,
            'fecha_de_admision' => '2017-02-01',
            'contrato'          => 'Determinado',
            'duracion'          => '30',
            'cestaticket'       => 'No',
            'banco'             => 'Venezuela',
            'cuenta_tipo'       => 'Ahorro',
            'cuenta_numero'     => '0102-0146-23010006113'.$i,
        ));

        }

    }
}
