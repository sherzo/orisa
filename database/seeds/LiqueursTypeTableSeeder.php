<?php

use Illuminate\Database\Seeder;

class LiqueursTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('liqueurs_types')->insert(array (
            'id_user' => '1',
        	'type_name' => 'Ron'
        ));

           \DB::table('liqueurs_types')->insert(array (
            'id_user' => '1',
        	'type_name' => 'Vino'
        ));

       	\DB::table('liqueurs_types')->insert(array (
            'id_user' => '1',
        	'type_name' => 'Vodka'
        ));

        \DB::table('liqueurs_types')->insert(array (
            'id_user' => '1',
        	'type_name' => 'Whiskey'
        ));

        \DB::table('liqueurs_types')->insert(array (
            'id_user' => '1',
        	'type_name' => 'Brandi'
        ));

    }
}
