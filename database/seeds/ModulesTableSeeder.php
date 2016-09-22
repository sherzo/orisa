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
        //------SERVICIOS
        \DB::table('modules')->insert(array (
            'modulo'	=> 'Clientes',
        ));
        \DB::table('modules')->insert(array (
            'modulo'	=> 'Platos',
        ));
        \DB::table('modules')->insert(array (
            'modulo'	=> 'Bebidas',
        ));
        \DB::table('modules')->insert(array (
            'modulo'    => 'Jugos',
        ));
        \DB::table('modules')->insert(array (
            'modulo'	=> 'Salsas',
        ));
        \DB::table('modules')->insert(array (
            'modulo'	=> 'Comandas',
        ));
        \DB::table('modules')->insert(array (
            'modulo'	=> 'Recibos',
        ));
        \DB::table('modules')->insert(array (
            'modulo'	=> 'Reservacion',
        ));
        //-------EMPLEADOS
        \DB::table('modules')->insert(array (
            'modulo'    => 'Asistencias',
        ));
        \DB::table('modules')->insert(array (
            'modulo'    => 'Cargos',
        ));
        \DB::table('modules')->insert(array (
            'modulo'    => 'Personal',
        ));
        \DB::table('modules')->insert(array (
            'modulo'    => 'Fechas',
        ));
        \DB::table('modules')->insert(array (
            'modulo'    => 'Dias',
        ));
        \DB::table('modules')->insert(array (
            'modulo'    => 'Planificacion',
        ));
        //--------COMPRA
        \DB::table('modules')->insert(array (
            'modulo'    => 'Orden de compra',
        ));
        \DB::table('modules')->insert(array (
            'modulo'    => 'Inventario',
        ));
        \DB::table('modules')->insert(array (
            'modulo'    => 'Proveedores',
        ));
        \DB::table('modules')->insert(array (
            'modulo'    => 'Ingredientes',
        ));
        \DB::table('modules')->insert(array (
            'modulo'    => 'Licores',
        ));
        //-------- Mantenimiento
        \DB::table('modules')->insert(array (
            'modulo'    => 'Usuarios',
        ));
        \DB::table('modules')->insert(array (
            'modulo'    => 'Respaldo BD',
        ));
        \DB::table('modules')->insert(array (
            'modulo'    => 'Restauracion',
        ));
        \DB::table('modules')->insert(array (
            'modulo'    => 'Bitacora',
        ));
    }
}
