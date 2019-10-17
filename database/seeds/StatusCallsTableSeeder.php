<?php

use Illuminate\Database\Seeder;
use App\StatusCall;

class StatusCallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusCall::create([
            'name' => 'Diterima'
        ]);

        StatusCall::create([
            'name' => 'Ditolak'
        ]);

        StatusCall::create([
            'name' => 'Dihubungi kembali'
        ]);

        StatusCall::create([
            'name' => 'TIdak Dijawab'
        ]);

        StatusCall::create([
            'name' => 'Kirim Katalog'
        ]);
    }
}
