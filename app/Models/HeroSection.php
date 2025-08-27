<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = ['badge', 'title', 'subtitle', 'desc', 'stats'];

    // Otomatis convert ke array/objek saat diambil
    protected $casts = [
        'stats' => 'array',
    ];
}
