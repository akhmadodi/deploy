<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create([
            'name' => 'Bunga Papan'
        ]);

        ProductCategory::create([
            'name' => 'Bunga Standing'
        ]);

        ProductCategory::create([
            'name' => 'Hampers and Gift'
        ]);

        ProductCategory::create([
            'name' => 'Bunga Meja'
        ]);

        ProductCategory::create([
            'name' => 'Hand Bouquet'
        ]);

        ProductCategory::create([
            'name' => 'Artificial'
        ]);

        ProductCategory::create([
            'name' => 'Baby Gift'
        ]);

        ProductCategory::create([
            'name' => 'Cake'
        ]);

        ProductCategory::create([
            'name' => 'Others'
        ]);
    }
}
