<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Jalankan seeder untuk tabel abouts.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'title'       => 'Who I Am',
            'description' => "Saya Moh Sahrul Alam Syah, seorang Fullstack Developer dengan spesialisasi Laravel dan Flutter. 
            
Passion saya adalah membangun aplikasi modern, scalable, serta ramah pengguna. 
Dengan pengalaman dalam mengelola proyek end-to-end — mulai dari perancangan database, backend API, hingga frontend interaktif — saya terbiasa menghadirkan solusi digital yang efisien dan berkualitas tinggi.",
            'image'       => 'about/profile.jpg', // Simpan gambar di storage/app/public/about/profile.jpg
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }
}
