<x-section-wrapper>
    <x-slot:title>LINK TAUTAN</x-slot>
    <div class="row g-2">
        @foreach ($sponsors as $sponsor)
            <div class="col-6 col-md-3">
                <div class="card rounded-0 border-0">
                    <img src="{{ $sponsor['image'] }}" class="card-img-top rounded-0 border-0" alt="sponsor">
                </div>
            </div>
        @endforeach
    </div>
</x-section-wrapper>
