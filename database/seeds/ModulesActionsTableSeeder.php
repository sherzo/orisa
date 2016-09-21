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

        //Modulo salsas
        \DB::table('modules_has_actions')->insert(array (
            'module_id'	=> '4',
            'action_id' => '1',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id'	=> '4',
            'action_id' => '2',
        ));

        \DB::table('modules_has_actions')->insert(array (
            'module_id'	=> '4',
            'action_id' => '3',
        ));
    }
}
