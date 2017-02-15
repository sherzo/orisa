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
			'slug' => 'SuperSU',
			'name' => 'SuperUsuario',
        ));

        \DB::table('roles')->insert(array(
            'slug' => 'Admin',
        	'name' => 'Administrador',
        ));

        \DB::table('roles')->insert(array(
        	'slug' => 'Tipo 1',
			'name' => 'Usuario',
        ));

        \DB::table('roles')->insert(array(
        	'slug' => 'Tipo 2',
			'name' => 'Usuario',
        ));

        \DB::table('roles')->insert(array(
        	'slug' => 'Tipo 3',
			'name' => 'Usuario',
        ));

        \DB::table('roles')->insert(array(
        	'slug' => 'Tipo 4',
			'name' => 'Usuario',
        ));

        \DB::table('roles')->insert(array(
            'slug' => 'Tipo 5',
            'name' => 'Usuario',
        ));
    }
}
