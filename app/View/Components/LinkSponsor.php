<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LinkSponsor extends Component
{
    public function render(): View|Closure|string
    {
        $sponsors = [
            ['image' => 'https://placehold.co/400x80'],
            ['image' => 'https://placehold.co/400x80'],
            ['image' => 'https://placehold.co/400x80'],
            ['image' => 'https://placehold.co/400x80'],
            ['image' => 'https://placehold.co/400x80'],
            ['image' => 'https://placehold.co/400x80'],
            ['image' => 'https://placehold.co/400x80'],
            ['image' => 'https://placehold.co/400x80'],
            ['image' => 'https://placehold.co/400x80'],
            ['image' => 'https://placehold.co/400x80'],
            ['image' => 'https://placehold.co/400x80'],
            ['image' => 'https://placehold.co/400x80'],
            ['image' => 'https://placehold.co/400x80'],
            ['image' => 'https://placehold.co/400x80'],
        ];

        return view('components.link-sponsor', compact('sponsors'));
    }
}
