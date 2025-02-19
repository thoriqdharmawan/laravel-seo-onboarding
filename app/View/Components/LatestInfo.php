<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LatestInfo extends Component
{
    public function render(): View|Closure|string
    {
        $news = [
            [
                'image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_sk0w28.webp',
                'date' => '2025-01-23',
                'formatted_date' => 'Kamis 23/01/2025 18:00 WIB',
                'title' => 'Seleksi Calon Anggota CPNS',
            ],
            [
                'image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_sk0w28.webp',
                'date' => '2025-02-01',
                'formatted_date' => 'Sabtu 01/02/2025 12:00 WIB',
                'title' => 'Peluncuran Proyek Baru',
            ],
            [
                'image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_sk0w28.webp',
                'date' => '2025-02-15',
                'formatted_date' => 'Jumat 15/02/2025 14:00 WIB',
                'title' => 'Webinar Teknologi AI',
            ],
        ];

        $announcements = [
            [
                'image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_sk0w28.webp',
                'date' => '2025-01-23',
                'formatted_date' => 'Kamis 23/01/2025 18:00 WIB',
                'title' => 'Hasil Seleksi Administrasi Calon Anggota CPNS',
            ],
            [
                'image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_sk0w28.webp',
                'date' => '2025-02-01',
                'formatted_date' => 'Sabtu 01/02/2025 12:00 WIB',
                'title' => 'Peluncuran Proyek Infrastruktur Kota',
            ],
            [
                'image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_sk0w28.webp',
                'date' => '2025-02-15',
                'formatted_date' => 'Jumat 15/02/2025 14:00 WIB',
                'title' => 'Webinar Teknologi AI untuk Smart City',
            ],
            [
                'image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_sk0w28.webp',
                'date' => '2025-02-15',
                'formatted_date' => 'Jumat 15/02/2025 14:00 WIB',
                'title' => 'Webinar Teknologi AI untuk Smart City',
            ]
        ];

        return view('components.latest-info', compact('news', 'announcements'));
    }
}
