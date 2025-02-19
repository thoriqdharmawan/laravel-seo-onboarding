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
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg'],
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg'],
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg'],
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg'],
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg'],
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg'],
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg'],
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg'],
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg'],
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg'],
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg'],
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg'],
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg'],
            ['image' => 'https://res.cloudinary.com/dc1ngxsqz/image/upload/f_auto,q_auto,w_auto/proses-pembangunan_p19jnu.jpg'],
        ];

        return view('components.link-sponsor', compact('sponsors'));
    }
}
