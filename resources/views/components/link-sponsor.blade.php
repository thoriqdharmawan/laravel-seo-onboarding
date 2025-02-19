<x-section-wrapper>
    <x-slot:title>LINK TAUTAN</x-slot>
    <div class="row g-2">
        @foreach ($sponsors as $sponsor)
            <div class="col-6 col-md-3">
                <div class="card rounded-0 border-0">
                    <div class="ratio" style="--bs-aspect-ratio: 20%;">
                        <img src="{{ $sponsor['image'] }}" title="sponsor"
                            class="w-100 h-100 object-fit-cover rounded-0 border-0" alt="sponsor">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-section-wrapper>
