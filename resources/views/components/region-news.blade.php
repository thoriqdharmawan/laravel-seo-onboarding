<x-section-wrapper>
    <x-slot:title>BERITA WILAYAH</x-slot>
    <div class="row g-4">
        @foreach ($news as $item)
            <x-news-item 
                :title="$item['title']"
                :date="$item['date']"
                :image="$item['image']"
                :alt="$item['alt']"
                :excerpt="$item['excerpt']"
            />
        @endforeach
    </div>
</x-section-wrapper>
