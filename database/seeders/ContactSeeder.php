<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('contacts')->insert([
            [
                'type' => 'email',
                'value' => 'syahsahrulalam58@gmail.com',
                'icon' => 'fas fa-envelope',
                'color' => '#3498db',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'type' => 'phone',
                'value' => '082220668915',
                'icon' => 'fas fa-phone',
                'color' => '#2ecc71',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'type' => 'location',
                'value' => 'Tegal, Jawa Tengah',
                'icon' => 'fas fa-map-marker-alt',
                'color' => '#e74c3c',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
