<?php

use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('actions')->insert(array (
            'accion'	=> 'ver',
        ));
        \DB::table('actions')->insert(array (
            'accion'	=> 'crear',
        ));
        \DB::table('actions')->insert(array (
            'accion'	=> 'editar',
        ));
        \DB::table('actions')->insert(array (
            'accion'	=> 'eliminar',
        ));
        \DB::table('actions')->insert(array (
            'accion'	=> 'procesar',
        ));
        \DB::table('actions')->insert(array (
            'accion'	=> 'administrar',
        ));
    }
}
