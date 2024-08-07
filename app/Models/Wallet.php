<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Wallet extends Model
{

    protected $fillable = [
        'holder_type', 'holder_id', 'name', 'slug', 'uuid', 'description', 'meta', 'balance', 'decimal_places'
    ];

    protected $casts = [
        'meta' => 'array',
    ];

    public function holder(): MorphTo
    {
        return $this->morphTo();
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
