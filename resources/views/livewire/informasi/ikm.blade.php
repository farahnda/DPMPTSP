<section class="py-5">
    <div class="container">
      
        <h2 class="mb-4 text-center">Regulasi</h2>

        <!-- Carousel -->
        <div id="ikmCarousel" class="carousel slide" data-bs-ride="carousel">
          
            <!-- Slides -->
            <div class="carousel-inner">
                @foreach($chunkedikm as $index => $chunk)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="row g-4">
                        @foreach($chunk as $ikm)
                            <div class="col-md-4">
                                <div class="d-flex flex-column h-100 border rounded p-3 bg-white">
                                    <iframe class="pdf-frame mb-3" src="{{ $ikm['pdf'] }}"></iframe>
                                    <div class="text-center flex-grow-1 d-flex align-items-center justify-content-center">
                                        <hr>
                                        <h6 class="mb-0">{{ $ikm['title'] }}</h6>
                                        <hr>
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
            
            <!-- Controls -->
            <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#ikmCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#ikmCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            
            <!-- ✅ Indikator harus di sini, SEJAJAR dengan carousel-inner -->
            <div class="carousel-indicators carousel-indicators-ikm mt-4">
                @foreach($chunkedikm as $index => $chunk)
                <button type="button"
                    data-bs-target="#ikmCarousel"
                    data-bs-slide-to="{{ $index }}"
                    class="{{ $index == 0 ? 'active' : '' }}"
                    aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
        </div>
    </div>
</section>
