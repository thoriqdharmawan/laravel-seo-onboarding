<aside class="my-5 d-flex flex-column gap-4">
    <input type="search" class="form-control border-0 bg-body-secondary" placeholder="Cari berita apa?"
        aria-describedby="search">

    <x-twibon></x-twibon>
    <x-scroll-article :articles="$articles"></x-scroll-article>
    <x-aside-carousel :slides="$slides"></x-aside-carousel>
</aside>
