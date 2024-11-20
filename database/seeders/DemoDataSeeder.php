<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoDataSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::query()->create([
            'name' => 'Admin User',
            'email' => 'admin@rakaya.sa',
            'password' => bcrypt('Password1234!'),
        ]);

        $user = User::query()->create([
            'name' => 'Normal User',
            'email' => 'user@rakaya.sa',
            'password' => bcrypt('Password1234!'),
        ]);

        // The admin can perform both admin and user actions.
        $admin->assignRole(RoleEnum::Admin);
        $admin->assignRole(RoleEnum::User);

        $user->assignRole(RoleEnum::User);
    }
}
