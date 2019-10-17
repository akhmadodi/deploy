<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'BP50',
            'price' => 500000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP55',
            'price' => 550000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP60',
            'price' => 600000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP65',
            'price' => 650000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP70',
            'price' => 700000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP75',
            'price' => 750000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP80',
            'price' => 800000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP85',
            'price' => 850000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP90',
            'price' => 900000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP95',
            'price' => 950000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP100',
            'price' => 1000000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP105',
            'price' => 1050000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP110',
            'price' => 1100000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP115',
            'price' => 1150000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP120',
            'price' => 1200000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP125',
            'price' => 1250000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP130',
            'price' => 1300000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP135',
            'price' => 1350000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP140',
            'price' => 1400000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP145',
            'price' => 1450000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP150',
            'price' => 1500000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP155',
            'price' => 1550000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP160',
            'price' => 1600000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP165',
            'price' => 1650000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP170',
            'price' => 1700000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP175',
            'price' => 1750000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP180',
            'price' => 1800000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP185',
            'price' => 1850000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP190',
            'price' => 1900000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP195',
            'price' => 1950000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP200',
            'price' => 2000000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF60',
            'price' => 600000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF65',
            'price' => 650000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF70',
            'price' => 700000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF75',
            'price' => 750000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF80',
            'price' => 800000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF85',
            'price' => 850000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF90',
            'price' => 900000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF95',
            'price' => 950000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF100',
            'price' => 1000000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF105',
            'price' => 1050000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF110',
            'price' => 1100000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF115',
            'price' => 1150000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF120',
            'price' => 1200000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF125',
            'price' => 1250000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF130',
            'price' => 1300000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF135',
            'price' => 1350000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF140',
            'price' => 1400000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF145',
            'price' => 1450000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF150',
            'price' => 1500000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF155',
            'price' => 1550000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF160',
            'price' => 1600000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF165',
            'price' => 1650000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF170',
            'price' => 1700000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF175',
            'price' => 1750000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF180',
            'price' => 1800000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF185',
            'price' => 1850000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF190',
            'price' => 1900000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF195',
            'price' => 1950000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF200',
            'price' => 2000000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM50',
            'price' => 500000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM55',
            'price' => 550000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM60',
            'price' => 600000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM65',
            'price' => 650000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM70',
            'price' => 700000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM75',
            'price' => 750000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM80',
            'price' => 800000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM85',
            'price' => 850000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM90',
            'price' => 900000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM95',
            'price' => 950000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM100',
            'price' => 1000000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM105',
            'price' => 1050000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM110',
            'price' => 1100000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM115',
            'price' => 1150000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM120',
            'price' => 1200000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM125',
            'price' => 1250000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM130',
            'price' => 1300000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM135',
            'price' => 1350000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM140',
            'price' => 1400000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM145',
            'price' => 1450000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM150',
            'price' => 1500000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM155',
            'price' => 1550000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM160',
            'price' => 1600000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM165',
            'price' => 1650000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM170',
            'price' => 1700000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM175',
            'price' => 1750000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM180',
            'price' => 1800000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM185',
            'price' => 1850000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM190',
            'price' => 1900000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM195',
            'price' => 1950000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM200',
            'price' => 2000000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB30',
            'price' => 300000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB35',
            'price' => 350000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB40',
            'price' => 400000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB45',
            'price' => 450000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB50',
            'price' => 500000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB55',
            'price' => 550000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB60',
            'price' => 600000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB65',
            'price' => 650000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB70',
            'price' => 700000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB75',
            'price' => 750000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB80',
            'price' => 800000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB85',
            'price' => 850000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB90',
            'price' => 900000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB95',
            'price' => 950000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB100',
            'price' => 1000000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB105',
            'price' => 1050000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB110',
            'price' => 1100000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB115',
            'price' => 1150000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB120',
            'price' => 1200000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB125',
            'price' => 1250000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB130',
            'price' => 1300000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB135',
            'price' => 1350000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB140',
            'price' => 1400000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB145',
            'price' => 1450000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB150',
            'price' => 1500000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB155',
            'price' => 1550000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB160',
            'price' => 1600000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB165',
            'price' => 1650000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB170',
            'price' => 1700000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB175',
            'price' => 1750000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB180',
            'price' => 1800000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB185',
            'price' => 1850000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB190',
            'price' => 1900000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB195',
            'price' => 1950000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'HB200',
            'price' => 2000000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Hand Bouquet')->first()->id
        ]);
          
        Product::create([
            'name' => 'CakeBF',
            'price' => 346500,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Cake')->first()->id
        ]);
          
        Product::create([
            'name' => 'CakeTM',
            'price' => 357500,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Cake')->first()->id
        ]);
          
        Product::create([
            'name' => 'CakeBFS',
            'price' => 369000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Cake')->first()->id
        ]);
          
        Product::create([
            'name' => 'CakeCCa',
            'price' => 434000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Cake')->first()->id
        ]);
          
        Product::create([
            'name' => 'CakeCT',
            'price' => 456500,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Cake')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG50',
            'price' => 500000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG55',
            'price' => 550000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG60',
            'price' => 600000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG65',
            'price' => 650000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG70',
            'price' => 700000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG75',
            'price' => 750000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG80',
            'price' => 800000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG85',
            'price' => 850000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG90',
            'price' => 900000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG95',
            'price' => 950000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG100',
            'price' => 1000000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG105',
            'price' => 1050000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG110',
            'price' => 1100000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG115',
            'price' => 1150000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG120',
            'price' => 1200000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG125',
            'price' => 1250000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG130',
            'price' => 1300000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG135',
            'price' => 1350000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG140',
            'price' => 1400000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG145',
            'price' => 1450000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG150',
            'price' => 1500000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG155',
            'price' => 1550000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG160',
            'price' => 1600000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG165',
            'price' => 1650000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG170',
            'price' => 1700000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG175',
            'price' => 1750000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG180',
            'price' => 1800000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG185',
            'price' => 1850000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG190',
            'price' => 1900000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG195',
            'price' => 1950000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BG200',
            'price' => 2000000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB50',
            'price' => 500000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB55',
            'price' => 550000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB60',
            'price' => 600000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB65',
            'price' => 650000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB70',
            'price' => 700000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB75',
            'price' => 750000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB80',
            'price' => 800000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB85',
            'price' => 850000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB90',
            'price' => 900000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB95',
            'price' => 950000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB100',
            'price' => 1000000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB105',
            'price' => 1050000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB110',
            'price' => 1100000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB115',
            'price' => 1150000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB120',
            'price' => 1200000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB125',
            'price' => 1250000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB130',
            'price' => 1300000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB135',
            'price' => 1350000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB140',
            'price' => 1400000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB145',
            'price' => 1450000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB150',
            'price' => 1500000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB155',
            'price' => 1550000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB160',
            'price' => 1600000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB165',
            'price' => 1650000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB170',
            'price' => 1700000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB175',
            'price' => 1750000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB180',
            'price' => 1800000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB185',
            'price' => 1850000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB190',
            'price' => 1900000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB195',
            'price' => 1950000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB200',
            'price' => 2000000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'CakeCD',
            'price' => 434000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Cake')->first()->id
        ]);
          
        Product::create([
            'name' => 'CakeCC',
            'price' => 346500,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Cake')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP1275',
            'price' => 1275000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP625',
            'price' => 625000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP84',
            'price' => 840000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP61',
            'price' => 610000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP648',
            'price' => 648000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'BP86',
            'price' => 860000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF625',
            'price' => 625000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF50',
            'price' => 500000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF55',
            'price' => 550000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);

        Product::create([
            'name' => 'BP620',
            'price' => 620000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Papan')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF6525',
            'price' => 652500,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
          
        Product::create([
            'name' => 'FB40',
            'price' => 400000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Baby Gift')->first()->id
        ]);
          
        Product::create([
            'name' => 'BM635',
            'price' => 635000,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Meja')->first()->id
        ]);
          
        Product::create([
            'name' => 'SF7515',
            'price' => 751500,
            'uid' => uniqid(),
            'product_category_id' => ProductCategory::where('name', 'Bunga Standing')->first()->id
        ]);
    }
}
