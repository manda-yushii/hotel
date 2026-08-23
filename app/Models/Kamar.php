<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kamar extends Model
{
    protected $table = 'kamar';

    protected $fillable = [
        'hotel_id',
        'nomor_kamar',
        'tipe',
        'harga',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'harga' => 'decimal:2',
    ];

    /**
     * Satu kamar dimiliki oleh satu hotel.
     */
    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }
}
