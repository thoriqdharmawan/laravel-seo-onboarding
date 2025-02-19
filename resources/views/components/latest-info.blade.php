<div class="row justify-content-start mt-5 mb-3">
    <div class="col-12 col-lg-8">
        <h2 class="fs-5 fw-normal d-inline-block border-bottom border-success border-2 pb-1">INFO TERKINI</h2>
        <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($news as $index => $item)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="card text-bg-dark border-0 rounded-lg">
                            <img src="{{ $item['image'] }}" title="{{ $item['title'] }}" class="card-img"
                                alt="thumbnail">
                            <div class="card-img-overlay d-flex align-items-end bg-black bg-opacity-25">
                                <div>
                                    <time class="card-text" datetime="{{ $item['date'] }}">
                                        <small>{{ $item['formatted_date'] }}</small>
                                    </time>
                                    <h3 class="card-title text-warning">{{ $item['title'] }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>
    <div class="col-12 col-lg-4 mt-lg-0 mt-4">
        <x-section-wrapper>
            <x-slot:title>PENGUMUMAN</x-slot>
            @foreach ($announcements as $item)
                <x-news-item-horizontal :news="$item" />
            @endforeach
        </x-section-wrapper>
    </div>
</div>
