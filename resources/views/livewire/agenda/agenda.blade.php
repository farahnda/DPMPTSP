<div>
    <div class="container mt-4">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-12">
                <div class="section-title">Agenda</div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-5 agenda-row">
            @foreach ($agenda as $item)
                <div class="col">
                    <div class="agenda h-100 shadow-sm border-0">
                        <div class="agenda-header bg-light text-dark small">
                            <i class="bi bi-calendar-event me-1"></i>
                            {{ \Carbon\Carbon::parse($item['tanggal'])->translatedFormat('l, d F Y') }}
                        </div>
                        <div class="agenda-body d-flex flex-column">
                            <h5 class="agenda-title fw-bold text-dark">
                                {{ $item['judul'] }}
                            </h5>
                            <a href="#" class="btn btn-custom-lainnya btn-sm mt-auto">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>