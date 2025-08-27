<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    // Kolom yang dapat diisi mass assignment
    protected $fillable = [
        'name',
        'category',        // tambahan
        'description',     // tambahan
        'client',
        'status',
        'priority',
        'deadline',
        'progress',
        'cover_image',
        'demo_link',       // tambahan
        'source_link',     // tambahan
        'technologies',    // tambahan, pisahkan koma
    ];

    protected $casts = [
        'deadline' => 'date',
        'progress' => 'integer',
    ];

    // URL lengkap untuk gambar
    public function getCoverImageUrlAttribute()
    {
        return $this->cover_image
            ? Storage::url($this->cover_image)
            : asset('assets/img/default-project.png'); // fallback default
    }

    // Status dengan huruf kapital
    public function getStatusLabelAttribute()
    {
        return ucfirst($this->status);
    }
    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }


    // Priority dengan huruf kapital
    public function getPriorityLabelAttribute()
    {
        return ucfirst($this->priority);
    }

    // Mendapatkan array teknologi
    public function getTechnologiesArrayAttribute()
    {
        return $this->technologies ? explode(',', $this->technologies) : [];
    }

    public $timestamps = true;
}
