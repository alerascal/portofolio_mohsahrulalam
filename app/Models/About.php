<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika mengikuti konvensi Laravel)
    protected $table = 'abouts';

    // Field yang bisa diisi massal
    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    
}
