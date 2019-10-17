<?php

use Illuminate\Database\Seeder;
use App\Country;
use App\Province;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create([
            'name' => 'DKI Jakarta',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Bali',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Banten',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Bengkulu',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'DI Yogyakarta',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Gorontalo',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Jambi',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Jawa Barat',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Jawa Tengah',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Jawa Timur',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Kalimantan Barat',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Kalimantan Selatan',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Kalimantan Tengah',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Kalimantan Timur',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Kep. Bangka Belitung',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Kep. Riau',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Lampung',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Maluku',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Maluku Utara',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Nanggroe Aceh Darussalam',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Nusa Tenggara Barat',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Nusa Tenggara Timur',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Papua',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Papua Barat',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Riau',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Sulawesi Barat',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Sulawesi Selatan',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Sulawesi Tengah',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Sulawesi Tenggara',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Sulawesi Utara',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Sumatera Barat',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Sumatera Selatan',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
          
        Province::create([
            'name' => 'Sumatera Utara',
            'country_id' => Country::where('name', 'Indonesia')->first()->id
        ]);
    }
}
