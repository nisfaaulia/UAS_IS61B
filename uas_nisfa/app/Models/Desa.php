<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Desa extends Model
{
    use HasFactory;

    public function petugas(): HasMany
    {
        return $this->hasMany(Petugas::class, 'desas_id');
    }

    public function balita(): HasMany
    {
        return $this->hasMany(Balita::class, 'desas_id');
    }
}
