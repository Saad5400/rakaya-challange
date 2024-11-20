<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'stock',
    ];

    public function borrowedBy(): MorphToMany
    {
        return $this->morphToMany(User::class, 'borrowable', 'borrowables')
            ->withPivot(['borrowed_at', 'returned_at'])
            ->withTimestamps();
    }
}
