<?php

use Illuminate\database\Seeder;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(LiqueursTypeTableSeeder::class);
        $this->call(IngredientsTypesTableSeeder::class);          
        $this->call(PositionsTableSeeder::class);         
        $this->call(ProvidersTableSeeder::class);
        $this->call(LiqueursTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(DeductionsTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(TurnsTableSeeder::class);
    }
}
