<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
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
        $this->call(DrinksTableSeeder::class);
        $this->call(LiqueursTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(DeductionsTableSeeder::class);
        $this->call(TurnsTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(ActionsTableSeeder::class);
        $this->call(ModulesActionsTableSeeder::class);
        $this->call(UsersModulesActionsTableSeeder::class);
        $this->call(TablesTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(SaucesTableSeeder::class);
        $this->call(SaucesIngredientsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(PlatesTableSeeder::class);
        $this->call(PlatesIngredientsTableSeeder::class);
        $this->call(BeveragesTableSeeder::class);
        $this->call(BeveragesLiqueursTableSeeder::class);
        $this->call(JuicesTableSeeder::class);
        $this->call(JuicesIngredientsTableSeeder::class);
        $this->call(PortalTableSeeder::class);
        $this->call(CestaticketTableSeeder::class);
        $this->call(InvoicesTableSeeder::class);
    }
}
