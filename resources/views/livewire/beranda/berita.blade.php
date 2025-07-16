<div>
    <div class="container mt-4 berita-terbaru-wrapper">
        <hr class="my-5">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-12 mb-4">
                <div class="section-title">Berita Terbaru</div>
            </div>

            <!-- Kolom Berita Utama -->
            <div class="col-lg-8 col-12 mb-4 text-start">
                <div class="card shadow border-0 h-100 p-3">
                    @foreach ($beritaUtama as $berita)
                        <div class="news-card d-flex flex-column flex-md-row align-items-start mb-4">
                            <img src="{{ asset($berita['gambar']) }}" alt="{{ $berita['judul'] }}"
                                class="news-img me-md-3 mb-3 mb-md-0">
                            <div>
                                <div class="news-date">{{ $berita['tanggal'] }}</div>
                                <h5 class="news-title">{{ $berita['judul'] }}</h5>
                                <div class="news-text">{{ $berita['isi'] }}</div>
                                <a href="{{ $berita['url'] }}" class="btn btn-warning btn-sm mt-2">Baca Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Kolom Berita Lainnya -->
            <div class="col-lg-4 col-12 mb-4 text-start">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body berita-lainnya-scroll">
                        <h6 class="fw-bold mb-3">Berita Lainnya</h6>
                        <ul class="list-group list-group-flush small">
                            @foreach ($beritaLainnya as $lainnya)
                                <li class="list-group-item">
                                    <div class="d-flex flex-column">
                                        <a href="{{ $lainnya['url'] }}" class="text-decoration-none fw-semibold">
                                            ▶️ {{ $lainnya['judul'] }}
                                        </a>
                                        <span class="text-muted small">{{ $lainnya['tanggal'] }}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Tombol Baca Berita Lainnya -->
            <div class="row justify-content-center mt-4">
                <div class="btnlainnya">
                    <a href="{{ url('/berita-galeri') }}" class="btn btn-custom-lainnya btn-lg w-100">Baca Berita Lainnya</a>
                </div>
            </div>
        </div>

    </div>
</div>