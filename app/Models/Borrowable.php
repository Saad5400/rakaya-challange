<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Borrowable extends Model
{
    protected $fillable = [
        'borrowable_type',
        'borrowable_id',
        'user_id',
        'borrowed_at',
        'returned_at',
    ];

    public function borrowable(): MorphTo
    {
        return $this->morphTo();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
