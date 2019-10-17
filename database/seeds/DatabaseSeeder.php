<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountriesTableSeeder::class,
            ProvincesTableSeeder::class,
            CitiesTableSeeder::class,
            AreasTableSeeder::class,
            CustomerCategoriesTableSeeder::class,
            ProductCategoriesTableSeeder::class,
            ComplainTypesTableSeeder::class,
            ProductsTableSeeder::class,
            StatusCallsTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            BankAccountsTableSeeder::class,
            PicsTableSeeder::class,
            PicBankAccountsTableSeeder::class,
            CustomersTableSeeder::class,
            CustomerPicsTableSeeder::class,
        ]);
    }
}
