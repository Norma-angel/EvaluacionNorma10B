<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usersseeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'name' => 'sa',
            'email' => 'sa@example.com',
            'password' => bcrypt('12345678'),
        ]);

        // Asignar rol
        $user->assignRole('super_admin');
    }
}
