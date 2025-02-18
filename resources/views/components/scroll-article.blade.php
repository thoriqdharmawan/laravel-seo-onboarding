<div class="px-1 py-5 bg-primary-subtle rounded">
    <div class="overflow-auto bg-white" style="height: 320px;">
        @foreach ($articles as $article)
            <div class="card border-0 border-bottom">
                <div class="row g-0 d-flex align-items-center">
                    <div class="col-md-4 p-3">
                        <img src="{{ $article['thumbnail'] }}" class="img-fluid rounded-circle"
                            alt="{{ $article['title'] }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">
                                <small class="text-body-secondary">{{ $article['title'] }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
