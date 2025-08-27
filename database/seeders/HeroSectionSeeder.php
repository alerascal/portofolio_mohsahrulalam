<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeroSection;

class HeroSectionSeeder extends Seeder
{
    /**
     * Jalankan seeder.
     */
    public function run(): void
    {
        HeroSection::create([
            'badge' => 'Fullstack Developer',
            'title' => 'Hi, I\'m Moh Sahrul Alam Syah',
            'subtitle' => 'Building Modern Web & Mobile Apps',
            'desc' => 'Saya adalah seorang fullstack developer dengan pengalaman membuat aplikasi berbasis web dan mobile. Fokus pada Laravel, Flutter, dan teknologi modern.',
            'stats' => [
                ['label' => 'Laravel', 'value' => 'Expert'],
                ['label' => 'Flutter', 'value' => 'Advanced'],
                ['label' => 'Fullstack Developer', 'value' => 'Professional'],
                ['label' => 'Project', 'value' => '15'],
            ],
        ]);
    }
}
