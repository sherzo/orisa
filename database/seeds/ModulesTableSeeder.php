<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('modules')->insert(array (
            'modulo'	=> 'clientes',
        ));
        \DB::table('modules')->insert(array (
            'modulo'	=> 'platos',
        ));
        \DB::table('modules')->insert(array (
            'modulo'	=> 'bebidas',
        ));
        \DB::table('modules')->insert(array (
            'modulo'	=> 'salsas',
        ));
        \DB::table('modules')->insert(array (
            'modulo'	=> 'comandas',
        ));
        \DB::table('modules')->insert(array (
            'modulo'	=> 'recibos',
        ));
        \DB::table('modules')->insert(array (
            'modulo'	=> 'reservaciones',
        ));
    }
}
