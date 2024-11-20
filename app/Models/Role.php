<?php

namespace App\Models;

use App\Enums\RoleEnum;
use App\Traits\HasPermissions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasPermissions;

    protected $fillable = [
        'name'
    ];

    protected $casts = [
        'name' => RoleEnum::class,
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_has_roles');
    }
}
