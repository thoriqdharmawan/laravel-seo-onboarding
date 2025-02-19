<div class="card mb-3 w-full border-0">
    <div class="row g-0">
        <div class="col-3">
            <img src="{{ $news['image'] }}" class="img-fluid rounded" alt="{{ $news['title'] }}" loading="lazy">
        </div>
        <div class="col-9">
            <div class="card-body py-0">
                <time class="card-text" datetime="{{ $news['date'] }}">
                    <small>{{ $news['formatted_date'] }}</small>
                </time>
                <h3 class="fs-5 m-0 text-truncate">{{ $news['title'] }}</h3>
                <p class="m-0">Sumber: OPD</p>
            </div>
        </div>
    </div>
</div>
