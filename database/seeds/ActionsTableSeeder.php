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
            'accion'	=> 'Ver',
        ));
        \DB::table('actions')->insert(array (
            'accion'	=> 'Crear',
        ));
        \DB::table('actions')->insert(array (
            'accion'	=> 'Editar',
        ));
        \DB::table('actions')->insert(array (
            'accion'	=> 'Eliminar',
        ));
        \DB::table('actions')->insert(array (
            'accion'    => 'Orden de compra',
        ));
        \DB::table('actions')->insert(array (
            'accion'	=> 'Procesar',
        ));
        \DB::table('actions')->insert(array (
            'accion'	=> 'Administrar',
        ));
    }
}
