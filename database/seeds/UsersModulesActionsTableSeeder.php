<?php

use Illuminate\Database\Seeder;

class UsersModulesActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    // ROOT SHERZO
    	for ($i=1; $i <=79 ; $i++) { 

	        \DB::table('users_modules_actions')->insert(array (
	            'user_id'	=> '31',
	            'module_action_id' => $i,
	        ));
        }

    // ROOT JESUS
        for ($i=1; $i <=79 ; $i++) { 

	        \DB::table('users_modules_actions')->insert(array (
	            'user_id'	=> '32',
	            'module_action_id' => $i,
	        ));
        }

    // ADMINSTRADOR
    for ($i=73; $i <=79 ; $i++) { 

	        \DB::table('users_modules_actions')->insert(array (
	            'user_id'	=> '33',
	            'module_action_id' => $i,
	        ));
        }

    // ENCARGADO
    for ($i=1; $i <=72 ; $i++) { 

            \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '34',
                'module_action_id' => $i,
            ));
        }

    // CHEF/COCINERO
    for ($i=5; $i <=21 ; $i++) { 
            \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '35',
                'module_action_id' => $i,
            ));
    }

    //CAJERA
    \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '36',
                'module_action_id' => '1',
            ));

    \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '36',
                'module_action_id' => '2',
            ));

    \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '36',
                'module_action_id' => '3',
            ));

    \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '36',
                'module_action_id' => '5',
            ));

    \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '36',
                'module_action_id' => '9',
            ));

    \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '36',
                'module_action_id' => '13',
            ));

    \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '36',
                'module_action_id' => '17',
            ));

    \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '36',
                'module_action_id' => '21',
            ));

    \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '36',
                'module_action_id' => '24',
            ));

    \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '36',
                'module_action_id' => '25',
            ));


    // MESONERO
    \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '37',
                'module_action_id' => '5',
            ));

    \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '37',
                'module_action_id' => '9',
            ));

    \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '37',
                'module_action_id' => '13',
            ));

    \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '37',
                'module_action_id' => '17',
            ));

     \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '37',
                'module_action_id' => '21',
            ));

     \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '37',
                'module_action_id' => '22',
            ));

     \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '37',
                'module_action_id' => '23',
            ));

     \DB::table('users_modules_actions')->insert(array (
                'user_id'   => '37',
                'module_action_id' => '24',
            ));


    }
}
