<div>
    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach ($cards as $card)
                <div class="col">
                    <div class="card custom-card h-100 text-white">
                        <div class="card-icon text-center mt-3">
                            <i class="bi {{ $card['icon'] }} fs-1"></i>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">{{ $card['title'] }}</h5>
                            <p class="card-text flex-grow-1">{{ $card['description'] }}</p>
                            <a href="{{ $card['url'] }}" class="btn btn-outline-light btn-sm mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>