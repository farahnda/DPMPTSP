<div class="container py-5 position-relative">
  <h2 class="mb-4 text-center">Indeks Kepuasan Masyarakat</h2>

  <div id="ikmCarousel" class="carousel slide" data-bs-ride="carousel">
    
    {{-- Carousel Indicators --}}
    <div class="carousel-indicators-ikm">
      @foreach($chunkedikm as $index => $chunk)
        <button type="button" data-bs-target="#ikmCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
      @endforeach
    </div>

    {{-- Carousel Content --}}
    <div class="carousel-inner">
      @foreach($chunkedikm as $index => $chunk)
        <div class="carousel-item-ikm {{ $index == 0 ? 'active' : '' }}">
          <div class="row g-4">
            @foreach($chunk as $ikm)
              <div class="col-md-4">
                <div class="d-flex flex-column h-100 border rounded p-3 bg-white">
                  <iframe class="pdf-frame mb-3" src="{{ $ikm['pdf'] }}" style="height: 200px;"></iframe>
                  <div class="text-center flex-grow-1 d-flex align-items-center justify-content-center">
                    <h6 class="mb-0">{{ $ikm['title'] }}</h6>
                  </div>
                  <hr>
                  <div class="mt-3 text-end">
                    <a href="{{ $ikm['pdf'] }}" target="_blank" class="btn btn-custom btn-primary btn-sm">Lihat</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>

    {{-- Carousel Controls --}}
    <button class="carousel-control-prev-ikm custom-arrow" type="button" data-bs-target="#ikmCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon-ikm"></span>
    </button>
    <button class="carousel-control-next-ikm custom-arrow" type="button" data-bs-target="#ikmCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon-ikm"></span>
    </button>

  </div>
</div>
