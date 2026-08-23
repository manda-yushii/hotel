<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Survei extends Model
{
    protected $table = 'survei';

    protected $fillable = [
        'nama_pelanggan',
        'email',
        'hotel_id',
        'kamar_id',
        'rating',
        'kritik_saran',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }

    public function kamar(): BelongsTo
    {
        return $this->belongsTo(Kamar::class);
    }
}
