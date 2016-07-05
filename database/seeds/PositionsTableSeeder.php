<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        \DB::table('positions')->insert(array (
            'codigo_cgo'  => strtoupper($faker->randomLetter).$faker->postcode,
            'nombre_cgo'  => 'Chef',
            'salario_cgo' => '15000.00'
        ));

		 \DB::table('positions')->insert(array (
            'codigo_cgo'  => strtoupper($faker->randomLetter).$faker->postcode,
            'nombre_cgo'  => 'Mesonero',
            'salario_cgo' => '12000.00'
        ));
    }
}
