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
    	for ($i=1; $i <=79 ; $i++) { 

	        \DB::table('users_modules_actions')->insert(array (
	            'user_id'	=> '31',
	            'module_action_id' => $i,
	        ));
        }

        for ($i=1; $i <=79 ; $i++) { 

	        \DB::table('users_modules_actions')->insert(array (
	            'user_id'	=> '32',
	            'module_action_id' => $i,
	        ));
        }

        for ($i=73; $i <=79 ; $i++) { 

	        \DB::table('users_modules_actions')->insert(array (
	            'user_id'	=> '33',
	            'module_action_id' => $i,
	        ));
        }
    }
}
