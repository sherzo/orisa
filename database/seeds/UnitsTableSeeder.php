<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('units')->insert(array (
            'id_user' => '1',
        	'units_name' => 'Kg'
        ));

           \DB::table('units')->insert(array (
            'id_user' => '1',
        	'units_name' => 'Mg'
        ));

       \DB::table('units')->insert(array (
            'id_user' => '1',
        	'units_name' => 'L'
        ));

        \DB::table('units')->insert(array (
            'id_user' => '1',
        	'units_name' => 'Ml'
        ));
    }
}
