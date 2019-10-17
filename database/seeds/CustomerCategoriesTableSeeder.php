<?php

use Illuminate\Database\Seeder;
use App\CustomerCategory;

class CustomerCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerCategory::create([
            'name' => 'Personal'
        ]);

        CustomerCategory::create([
            'name' => 'Corporate'
        ]);

        CustomerCategory::create([
            'name' => 'Others'
        ]);

        CustomerCategory::create([
            'name' => 'Marketplace'
        ]);
    }
}
