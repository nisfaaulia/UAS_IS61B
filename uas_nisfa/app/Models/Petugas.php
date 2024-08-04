<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Petugas extends Model
{
    use HasFactory;

    public function desa(): BelongsTo
    {
        return $this->belongsTo(Desa::class, 'desas_id');
    }

    public function balitas(): HasMany
    {
        return $this->hasMany(Balita::class, 'petugas_id');
    }
}

