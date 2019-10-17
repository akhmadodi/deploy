<?php

use Illuminate\Database\Seeder;
use App\ComplainType;

class ComplainTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComplainType::create([
            'name' => 'Salah Kirim'
        ]);

        ComplainType::create([
            'name' => 'Keterlambatan Kirim'
        ]);
    }
}
