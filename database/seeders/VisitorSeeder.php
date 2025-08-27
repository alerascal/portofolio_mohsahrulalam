<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visitor;
use Carbon\Carbon;

class VisitorSeeder extends Seeder
{
    public function run(): void
    {
        // Bersihkan data lama
        Visitor::truncate();

        // Dummy untuk 1 tahun terakhir
        $startDate = Carbon::now()->subYear();
        $endDate   = Carbon::now();

        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
            // jumlah visitor random per hari (0 - 20)
            $visitorsCount = rand(0, 20);

            for ($i = 0; $i < $visitorsCount; $i++) {
                Visitor::create([
                    'ip_address' => fake()->ipv4(),
                    'user_agent' => fake()->userAgent(),
                    'visited_at' => $date->copy()->addMinutes(rand(0, 1440)), // acak jam
                ]);
            }
        }
    }
}
