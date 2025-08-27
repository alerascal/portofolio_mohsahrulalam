<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $projects = [
    [
        'name' => 'Sistem Informasi Akademik',
        'client' => 'Universitas XYZ',
        'status' => 'completed', // sebelumnya 'Completed'
        'priority' => 'high',    // sebelumnya 'High'
        'deadline' => '2023-06-30',
        'progress' => 100,
    ],
    [
        'name' => 'Website Toko Online',
        'client' => 'Toko ABC',
        'status' => 'completed',
        'priority' => 'medium',
        'deadline' => '2023-12-15',
        'progress' => 100,
    ],
    [
        'name' => 'Aplikasi Manajemen Perpustakaan',
        'client' => 'Sekolah DEF',
        'status' => 'active', // sebelumnya 'In Progress'
        'priority' => 'high',
        'deadline' => '2024-03-31',
        'progress' => 70,
    ],
    [
        'name' => 'Sistem Kasir',
        'client' => 'Latihan Pribadi',
        'status' => 'completed',
        'priority' => 'low',
        'deadline' => '2022-02-28',
        'progress' => 100,
    ],
    [
        'name' => 'Tugas Akhir: Sistem Pelayanan Publik DPRD',
        'client' => 'DPRD Kota Tegal',
        'status' => 'active',
        'priority' => 'high',
        'deadline' => '2025-05-31',
        'progress' => 50,
    ],
];


foreach ($projects as $project) {
    Project::create($project);
}

    }
}
