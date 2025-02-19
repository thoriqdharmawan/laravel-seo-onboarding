<div>
    <h2 class="fs-6 fw-normal d-inline-block border-bottom border-success border-2 pb-1">SUARA WARGA</h2>
    <div id="asideCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($slides as $index => $slide)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ $slide['image'] }}" class="d-block w-100" title="Slide {{ $index + 1 }}" alt="Slide {{ $index + 1 }}">
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#asideCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#asideCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

</div>
