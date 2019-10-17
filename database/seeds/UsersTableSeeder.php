<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 2,
            'full_name' => 'Superadmin Test',
            'email' => 'superadmin@mail.com',
            'phone' => '08x',
            'password' => '$2y$10$TcL4qODuXOZZGiFTOpBo7.DCI7yOyw7ZG01x5TFCijTDqD1RYy6su',
            'uid' => uniqid(),
            'role_id' => Role::where('name', 'Superadmin')->first()->id,
            'activated' => true
            ]);
            
            
            User::create([
            'id' => 4,
            'full_name' => 'Avila Sahala',
            'email' => 'avila.juslynflorist@gmail.com',
            'phone' => '087889982839',
            'password' => '$2y$10$TcL4qODuXOZZGiFTOpBo7.DCI7yOyw7ZG01x5TFCijTDqD1RYy6su',
            'uid' => uniqid(),
            'role_id' => Role::where('name', 'Superadmin')->first()->id,
            'activated' => true
            ]);
            
            
            User::create([
            'id' => 6,
            'full_name' => 'Superuser Test',
            'email' => 'superuser@mail.com',
            'phone' => '08xx',
            'password' => '$2y$10$TcL4qODuXOZZGiFTOpBo7.DCI7yOyw7ZG01x5TFCijTDqD1RYy6su',
            'uid' => uniqid(),
            'role_id' => Role::where('name', 'Superuser')->first()->id,
            'activated' => true
            ]);
            
            
            User::create([
            'id' => 7,
            'full_name' => 'Admin Test',
            'email' => 'admin@mail.com',
            'phone' => '08xxx',
            'password' => '$2y$10$TcL4qODuXOZZGiFTOpBo7.DCI7yOyw7ZG01x5TFCijTDqD1RYy6su',
            'uid' => uniqid(),
            'role_id' => Role::where('name', 'Admin')->first()->id,
            'activated' => true
            ]);
            
            
            User::create([
            'id' => 8,
            'full_name' => 'QC',
            'email' => 'qc@mail.com',
            'phone' => '08xxxx',
            'password' => '$2y$10$TcL4qODuXOZZGiFTOpBo7.DCI7yOyw7ZG01x5TFCijTDqD1RYy6su',
            'uid' => uniqid(),
            'role_id' => Role::where('name', 'QC')->first()->id,
            'activated' => true
            ]);
            
            
            User::create([
            'id' => 9,
            'full_name' => 'Sales Test',
            'email' => 'sales@mail.com',
            'phone' => '08xxxxx',
            'password' => '$2y$10$TcL4qODuXOZZGiFTOpBo7.DCI7yOyw7ZG01x5TFCijTDqD1RYy6su',
            'uid' => uniqid(),
            'role_id' => Role::where('name', 'Sales')->first()->id,
            'activated' => true
            ]);
            
            
            User::create([
            'id' => 15,
            'full_name' => 'Ragad Nova',
            'email' => 'nova.juslynflorist@gmail.com',
            'phone' => '089632222310',
            'password' => '$2y$10$TcL4qODuXOZZGiFTOpBo7.DCI7yOyw7ZG01x5TFCijTDqD1RYy6su',
            'uid' => uniqid(),
            'role_id' => Role::where('name', 'Sales')->first()->id,
            'activated' => true
            ]);
            
            
            User::create([
            'id' => 16,
            'full_name' => 'Arlie Syaiful',
            'email' => 'arnold.juslynflorists@gmail.com',
            'phone' => '083896193535',
            'password' => '$2y$10$TcL4qODuXOZZGiFTOpBo7.DCI7yOyw7ZG01x5TFCijTDqD1RYy6su',
            'uid' => uniqid(),
            'role_id' => Role::where('name', 'Sales')->first()->id,
            'activated' => true
            ]);
            
            
            User::create([
            'id' => 17,
            'full_name' => 'Vieola Nathania',
            'email' => 'vieola.juslynflorist@gmail.com',
            'phone' => '083115130803',
            'password' => '$2y$10$TcL4qODuXOZZGiFTOpBo7.DCI7yOyw7ZG01x5TFCijTDqD1RYy6su',
            'uid' => uniqid(),
            'role_id' => Role::where('name', 'Sales')->first()->id,
            'activated' => true
            ]);
            
            
            User::create([
            'id' => 18,
            'full_name' => 'Azizah Umaya',
            'email' => 'azizah.juslynflorist@gmail.com',
            'phone' => '085880286431',
            'password' => '$2y$10$TcL4qODuXOZZGiFTOpBo7.DCI7yOyw7ZG01x5TFCijTDqD1RYy6su',
            'uid' => uniqid(),
            'role_id' => Role::where('name', 'Sales')->first()->id,
            'activated' => true
            ]);
            
            
            User::create([
            'id' => 19,
            'full_name' => 'Juslyn Admin Team',
            'email' => 'juslynflo@gmail.com',
            'phone' => '085100354707',
            'password' => '$2y$10$TcL4qODuXOZZGiFTOpBo7.DCI7yOyw7ZG01x5TFCijTDqD1RYy6su',
            'uid' => uniqid(),
            'role_id' => Role::where('name', 'Admin')->first()->id,
            'activated' => true
            ]);
            
            
            User::create([
            'id' => 20,
            'full_name' => 'Superadmin',
            'email' => 'juslynflorist@hotmail.com',
            'phone' => '058514180000',
            'password' => '$2y$10$TcL4qODuXOZZGiFTOpBo7.DCI7yOyw7ZG01x5TFCijTDqD1RYy6su',
            'uid' => uniqid(),
            'role_id' => Role::where('name', 'Superadmin')->first()->id,
            'activated' => true
            ]);
            
            
            User::create([
            'id' => 21,
            'full_name' => 'Dewi Aprilia',
            'email' => 'dewi.juslynflorist@gmail.com',
            'phone' => '089637340453',
            'password' => '$2y$10$TcL4qODuXOZZGiFTOpBo7.DCI7yOyw7ZG01x5TFCijTDqD1RYy6su',
            'uid' => uniqid(),
            'role_id' => Role::where('name', 'Sales')->first()->id,
            'activated' => true
            ]);            
    }
}
