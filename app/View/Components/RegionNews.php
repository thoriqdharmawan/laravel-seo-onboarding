<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RegionNews extends Component
{
    public function render(): View|Closure|string
    {
        $news = [
            [
                'title' => 'Musrenbang Tematik Jaring Aspirasi Wujudkan Lansia',
                'date' => '2025-01-23',
                'image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg',
                'alt' => 'Proses pembangunan infrastruktur di Kota Yogyakarta',
                'excerpt' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.'
            ],
            [
                'title' => 'Peningkatan Infrastruktur Jalan untuk Kenyamanan Warga',
                'date' => '2025-02-10',
                'image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg',
                'alt' => 'Pengerjaan infrastruktur jalan Kota Yogyakarta',
                'excerpt' => 'Proyek perbaikan jalan terus dilakukan untuk mendukung mobilitas warga dengan lebih baik.'
            ],
            [
                'title' => 'Festival Budaya Yogyakarta 2025 Siap Digelar',
                'date' => '2025-03-05',
                'image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg',
                'alt' => 'Suasana Festival Budaya Yogyakarta 2025',
                'excerpt' => 'Festival budaya kembali digelar dengan berbagai pertunjukan seni khas daerah.'
            ],
        ];

        return view('components.region-news', compact('news'));
    }
}
