<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'nama_hotel',
        'deskripsi',
        'alamat',
        'kota',
        'telepon',
        'email',
        'rating',
        'gambar',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'rating' => 'decimal:1',
    ];

    /**
     * Satu hotel memiliki banyak kamar.
     */
    public function kamar(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Kamar::class);
    }
}
