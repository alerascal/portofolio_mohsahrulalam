<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // panggil semua seeder yang sudah dibuat
        $this->call([
            UserSeeder::class,
            SkillSeeder::class,
            ExperienceSeeder::class,
            HeroSectionSeeder::class,
            AboutSeeder::class,
            ProjectSeeder::class,
            ContactSeeder::class,
            VisitorSeeder::class,
            SocialLinksSeeder::class,
        ]);
    }
}
