<?php

namespace App\Traits;

use App\Enums\PermissionEnum;
use App\Enums\RoleEnum;
use App\Models\Role;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasRoles
{
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'user_has_roles');
    }

    public function cachedRoles()
    {
        return cache()->remember("user:{$this->id}:roles", now()->addMinutes(60), function () {
            return $this->roles()->get();
        });
    }

    public function hasRole(RoleEnum $role): bool
    {
        return $this->cachedRoles()->contains('name', $role->value);
    }

    public function assignRole(RoleEnum $role): void
    {
        $this->roles()->attach(Role::query()->firstOrCreate(['name' => $role]));
        cache()->forget("user:{$this->id}:roles");
    }


    public function removeRole(RoleEnum $role): void
    {
        $this->roles()->detach(Role::query()->firstOrCreate(['name' => $role]));
        cache()->forget("user:{$this->id}:roles");
    }


    public function hasPermission(PermissionEnum $permission): bool
    {
        return $this->cachedRoles()->reduce(function ($carry, $role) use ($permission) {
            return $carry || $role->hasPermission($permission);
        }, false);
    }
}
