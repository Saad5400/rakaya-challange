<?php

namespace App\Traits;

use App\Enums\PermissionEnum;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasPermissions
{
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'role_has_permissions');
    }

    public function cachedPermissions()
    {
        return cache()->remember("role:{$this->id}:permissions", now()->addMinutes(60), function () {
            return $this->permissions()->get();
        });
    }

    public function hasPermission(PermissionEnum $permission): bool
    {
        return $this->cachedPermissions()->contains('name', $permission->value);
    }

    public function assignPermission(PermissionEnum $permission): void
    {
        $this->permissions()->attach(Permission::query()->firstOrCreate(['name' => $permission]));
        cache()->forget("role:{$this->id}:permissions");
    }

    public function removePermission(PermissionEnum $permission): void
    {
        $this->permissions()->detach(Permission::query()->firstOrCreate(['name' => $permission]));
        cache()->forget("role:{$this->id}:permissions");
    }
}
