<?php

namespace Database\Seeders;

use App\Enums\PermissionEnum;
use App\Enums\RoleEnum;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        $admin = Role::query()->create([
            'name' => RoleEnum::Admin,
        ]);

        $user = Role::query()->create([
            'name' => RoleEnum::User,
        ]);

        // the assignPermission method will create the permission if it does not exist.
        $admin->assignPermission(PermissionEnum::CreateBook);
        $admin->assignPermission(PermissionEnum::UpdateBook);
        $admin->assignPermission(PermissionEnum::DeleteBook);
        $admin->assignPermission(PermissionEnum::StockBook);

        $user->assignPermission(PermissionEnum::BorrowBook);
        $user->assignPermission(PermissionEnum::ReturnBook);
    }
}
