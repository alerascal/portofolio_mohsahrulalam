<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            // Bahasa Pemrograman
            ['category' => 'Bahasa Pemrograman', 'name' => 'PHP', 'icon' => 'fab fa-php', 'level' => 90],
            ['category' => 'Bahasa Pemrograman', 'name' => 'JavaScript', 'icon' => 'fab fa-js-square', 'level' => 85],
            ['category' => 'Bahasa Pemrograman', 'name' => 'Python', 'icon' => 'fab fa-python', 'level' => 95],

            // Framework
            ['category' => 'Framework', 'name' => 'Laravel', 'icon' => 'fab fa-laravel', 'level' => 90],
            ['category' => 'Framework', 'name' => 'CodeIgniter', 'icon' => 'fas fa-code', 'level' => 85],
            ['category' => 'Framework', 'name' => 'JavaScript (Framework/Library)', 'icon' => 'fab fa-js', 'level' => 80],

            // Database
            ['category' => 'Database', 'name' => 'MySQL', 'icon' => 'fas fa-database', 'level' => 85],
            ['category' => 'Database', 'name' => 'phpMyAdmin', 'icon' => 'fas fa-server', 'level' => 80],

            // Tools
            ['category' => 'Tools', 'name' => 'VS Code', 'icon' => 'fas fa-code', 'level' => 85],
            ['category' => 'Tools', 'name' => 'Git & GitHub', 'icon' => 'fab fa-git-alt', 'level' => 90],
            ['category' => 'Tools', 'name' => 'XAMPP', 'icon' => 'fas fa-server', 'level' => 85],
            ['category' => 'Tools', 'name' => 'Laragon', 'icon' => 'fas fa-laptop-code', 'level' => 80],
            ['category' => 'Tools', 'name' => 'HERD', 'icon' => 'fas fa-cloud', 'level' => 85],
            ['category' => 'Tools', 'name' => 'DBngin', 'icon' => 'fas fa-database', 'level' => 85],
            ['category' => 'Tools', 'name' => 'TablePlus', 'icon' => 'fas fa-table', 'level' => 85],
        ];

        foreach($skills as $skill) {
            Skill::create($skill);
        }
    }
}
