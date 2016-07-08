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
            'codigo'  => strtoupper($faker->randomLetter).$faker->postcode,
            'nombre'  => 'Chef',
            'salario' => '15000.00'
        ));

		 \DB::table('positions')->insert(array (
            'codigo'  => strtoupper($faker->randomLetter).$faker->postcode,
            'nombre'  => 'Mesonero',
            'salario' => '12000.00'
        ));
    }
}
