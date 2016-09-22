<?php

use Illuminate\Database\Seeder;

class ModulesActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Modulo clientes
        \DB::table('modules_has_actions')->insert(array (
            'module_id'	=> '1',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id'	=> '1',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id'	=> '1',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '1',
            'action_id' => '4',
        ));

        //Modulo platos
        \DB::table('modules_has_actions')->insert(array (
            'module_id'	=> '2',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id'	=> '2',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id'	=> '2',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '2',
            'action_id' => '4',
        ));

        //Modulo bebidas
        \DB::table('modules_has_actions')->insert(array (
            'module_id'	=> '3',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id'	=> '3',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id'	=> '3',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '3',
            'action_id' => '4',
        ));

        //Modulo Jugos
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '4',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '4',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '4',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '4',
            'action_id' => '4',
        ));

        //Modulo salsas
        \DB::table('modules_has_actions')->insert(array (
            'module_id'	=> '5',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id'	=> '5',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id'	=> '5',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '5',
            'action_id' => '4',
        ));

        //Modulo comandas
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '6',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '6',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '6',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '6',
            'action_id' => '4',
        ));

        //Modulo Recibos
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '7',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '7',
            'action_id' => '2',
        ));

        //Modulo Reservaciones
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '8',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '8',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '8',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '8',
            'action_id' => '4',
        ));

        //Modulo Asistencias
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '9',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '9',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '9',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '9',
            'action_id' => '4',
        ));

        //Modulo Cargos
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '10',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '10',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '10',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '10',
            'action_id' => '4',
        ));

        //Modulo Personal
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '11',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '11',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '11',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '11',
            'action_id' => '4',
        ));

        //Modulo Fechas
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '12',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '12',
            'action_id' => '4',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '12',
            'action_id' => '7',
        ));

        //Modulo Dias
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '13',
            'action_id' => '3',
        ));

        //Modulo Planificacion
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '14',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '14',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '14',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '14',
            'action_id' => '4',
        ));

        //Modulo Orden de compra
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '15',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '15',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '15',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '15',
            'action_id' => '4',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '15',
            'action_id' => '6',
        ));

        //Modulo Inventario
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '16',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '16',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '16',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '16',
            'action_id' => '4',
        ));

        //Modulo Proveedores
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '17',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '17',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '17',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '17',
            'action_id' => '4',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '17',
            'action_id' => '5',
        ));
        //Modulo Ingredientes
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '18',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '18',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '18',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '18',
            'action_id' => '4',
        ));

        //Modulo Licores
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '19',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '19',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '19',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '19',
            'action_id' => '4',
        ));

        //Modulo Usuarios
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '20',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '20',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '20',
            'action_id' => '3',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '20',
            'action_id' => '4',
        ));

        //Modulo Respaldo de BD
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '21',
            'action_id' => '1',
        ));

        //Modulo Restauracion de BD
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '22',
            'action_id' => '1',
        ));

        //Modulo Bitacora
        \DB::table('modules_has_actions')->insert(array (
            'module_id' => '23',
            'action_id' => '4',
        ));
    }
}
