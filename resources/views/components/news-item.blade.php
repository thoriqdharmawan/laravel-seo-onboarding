<div class="col-12 col-sm-6 col-md-4">
    <div class="card border-0 shadow p-3">
        <img src="{{ $image }}" class="card-img rounded-lg" alt="{{ $alt }}" title="{{ $title }}"
            loading="lazy">
        <div class="card-body pt-3 px-0 pb-0">
            <time class="fs-6" datetime="{{ $date }}">{{ strftime('%d %B %Y', strtotime($date)) }}</time>
            <h3 class="fs-5 text-truncate mt-1">{{ $title }}</h3>
            <p class="card-text">{{ $excerpt }}</p>
        </div>
    </div>
</div>
