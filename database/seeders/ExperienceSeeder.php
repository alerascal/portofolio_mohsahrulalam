<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $experiences = [
            [
                'date' => '2022 - Semester 1',
                'title' => 'Sistem Kasir',
                'company' => 'Python',
                'description' => "Membuat sistem kasir sederhana untuk latihan dasar pemrograman.\n• Bahasa: Python\n• Tools: PyCharm, SQLite"
            ],
            [
                'date' => '2023 - Semester 2',
                'title' => 'Sistem Perpustakaan & Absensi',
                'company' => 'Python + Flask',
                'description' => "Mengembangkan aplikasi manajemen perpustakaan dan sistem absensi.\n• Bahasa: Python\n• Framework: Flask\n• Database: SQLite"
            ],
            [
                'date' => '2023 - Semester 3',
                'title' => 'Top Up Game',
                'company' => 'PHP + CodeIgniter',
                'description' => "Membuat aplikasi top up game sederhana dengan fitur pembayaran dan integrasi database.\n• Bahasa: PHP\n• Framework: CodeIgniter\n• Database: MySQL"
            ],
            [
                'date' => '2024 - Semester 4',
                'title' => 'Magang IT Support',
                'company' => 'Sekretariat DPRD Kota Tegal',
                'description' => "Melaksanakan magang sebagai IT Support di Kantor Sekretariat DPRD Kota Tegal.\n• Tugas: Maintenance jaringan, troubleshooting, dukungan sistem informasi\n• Tools: Windows Server, Network Tools, Ms. Office"
            ],
            [
                'date' => '2024 - Semester 5',
                'title' => 'Sistem Data Rumah Sakit',
                'company' => 'Flutter',
                'description' => "Membangun aplikasi mobile untuk manajemen data rumah sakit.\n• Framework: Flutter\n• Bahasa: Dart\n• Database: Firebase"
            ],
            [
                'date' => '2025 - Semester 6',
                'title' => 'Tugas Akhir: Sistem Pelayanan Publik DPRD',
                'company' => 'Laravel 10 + Tailwind',
                'description' => "Mengembangkan Sistem Informasi Pelayanan Publik DPRD sebagai Tugas Akhir D3.\n• Framework: Laravel 10\n• Frontend: Tailwind CSS\n• Database: MySQL\n• Tools: GitHub, XAMPP"
            ],
        ];

        foreach ($experiences as $exp) {
            Experience::create($exp);
        }
    }
}
