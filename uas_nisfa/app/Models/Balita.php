<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Balita extends Model
{
    use HasFactory;

    public function petugas(): BelongsTo
    {
        return $this->belongsTo(Petugas::class, 'petugas_id');
    }

    public function desa(): BelongsTo
    {
        return $this->belongsTo(Desa::class, 'desas_id');
    }
}
