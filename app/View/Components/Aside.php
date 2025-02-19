<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Aside extends Component
{
    public function render(): View|Closure|string
    {
        $articles = [
            ['title' => 'Berita 1: Update Laravel', 'thumbnail' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_sk0w28.webp'],
            ['title' => 'Berita 2: Vue.js 3 Fitur Baru', 'thumbnail' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_sk0w28.webp'],
            ['title' => 'Berita 3: AI dan Web Development', 'thumbnail' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_sk0w28.webp'],
            ['title' => 'Berita 4: Security di Laravel', 'thumbnail' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_sk0w28.webp'],
            ['title' => 'Berita 5: Tailwind vs Bootstrap', 'thumbnail' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_sk0w28.webp'],
        ];

        $slides = [
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_sk0w28.webp', 'caption' => 'Slide Pertama'],
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_sk0w28.webp', 'caption' => 'Slide Kedua'],
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_sk0w28.webp', 'caption' => 'Slide Ketiga'],
        ];

        return view('components.aside', compact('articles', 'slides'));
    }
}
