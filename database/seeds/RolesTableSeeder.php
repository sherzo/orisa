<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert(array (
			'slug' => '1',
			'name' => 'SuperUsuario',
        ));

        \DB::table('roles')->insert(array(
            'slug' => '2',
        	'name' => 'Administrador',
        ));

        \DB::table('roles')->insert(array(
        	'slug' => '3',
			'name' => 'Encargado',
        ));

        \DB::table('roles')->insert(array(
        	'slug' => '4',
			'name' => 'Cocinero',
        ));

        \DB::table('roles')->insert(array(
        	'slug' => '5',
			'name' => 'Cajero',
        ));

        \DB::table('roles')->insert(array(
        	'slug' => '6',
			'name' => 'Mesonero',
        ));

        \DB::table('roles')->insert(array(
            'slug' => '7',
            'name' => 'Cliente',
        ));

        \DB::table('roles')->insert(array(
            'slug' => '8',
            'name' => 'Chef',
        ));
    }
}
