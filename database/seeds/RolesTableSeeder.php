<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Superadmin'
        ]);

        Role::create([
            'name' => 'Superuser'
        ]);

        Role::create([
            'name' => 'Admin'
        ]);

        Role::create([
            'name' => 'QC'
        ]);

        Role::create([
            'name' => 'Sales'
        ]);
    }
}
