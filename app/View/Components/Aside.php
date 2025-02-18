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
            ['title' => 'Berita 1: Update Laravel', 'thumbnail' => 'https://placehold.co/120x120'],
            ['title' => 'Berita 2: Vue.js 3 Fitur Baru', 'thumbnail' => 'https://placehold.co/120x120'],
            ['title' => 'Berita 3: AI dan Web Development', 'thumbnail' => 'https://placehold.co/120x120'],
            ['title' => 'Berita 4: Security di Laravel', 'thumbnail' => 'https://placehold.co/120x120'],
            ['title' => 'Berita 5: Tailwind vs Bootstrap', 'thumbnail' => 'https://placehold.co/120x120'],
        ];

        return view('components.aside', compact('articles'));
    }
}
