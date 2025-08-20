<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi penamaan tabel
    protected $table = 'projects';

    // Tentukan kolom yang dapat diisi mass-assignable
    protected $fillable = [
        'name',
        'client',
        'status',
        'priority',
        'deadline',
        'progress',
    ];

    // Jika Anda ingin menyertakan kolom created_at dan updated_at secara otomatis, pastikan properti berikut ada
    public $timestamps = true;

    // Jika Anda ingin melakukan mutasi pada atribut atau manipulasi, Anda bisa menambahkan metode accessor atau mutator
}
