<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'name' => 'Indonesia'
        ]);

        Country::create([
            'name' => 'Malaysia'
        ]);

        Country::create([
            'name' => 'Thailand'
        ]);
    }
}
