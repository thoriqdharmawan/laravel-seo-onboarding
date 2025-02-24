<section>
    <div class="w-full border-bottom border-success border-2 m-0">
        <div class="bg-success rounded-top-3 d-inline-block px-2 py-1">
            <h2 class="fs-6 text-white fw-light m-0">{{ $title }}</h2>
        </div>
    </div>
    <div class="py-3">
        {{ $slot }}
    </div>

    <div class="w-full d-flex justify-content-end mt-3">
        <button type="button" class="btn">Selengkapnya &gt;</button>
    </div>
</section>
