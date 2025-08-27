<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SocialLink;

class SocialLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            [
                'name' => 'TikTok',
                'icon' => 'fab fa-tiktok',
                'url'  => 'https://www.tiktok.com/@username',
            ],
            [
                'name' => 'WhatsApp',
                'icon' => 'fab fa-whatsapp',
                'url'  => 'https://wa.me/6280000000000', // ganti dengan nomor WA kamu
            ],
            [
                'name' => 'Facebook',
                'icon' => 'fab fa-facebook',
                'url'  => 'https://facebook.com/username',
            ],
            [
                'name' => 'Instagram',
                'icon' => 'fab fa-instagram',
                'url'  => 'https://instagram.com/username',
            ],
            [
                'name' => 'LinkedIn',
                'icon' => 'fab fa-linkedin',
                'url'  => 'https://linkedin.com/in/username',
            ],
        ];

        foreach ($links as $link) {
            SocialLink::create($link);
        }
    }
}
