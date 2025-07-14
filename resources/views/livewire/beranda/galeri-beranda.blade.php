<div>
    <hr>
    <div class="container py-5">
        <h2 class="mb-4 text-center">Galeri</h2>
        <div id="lightgallery-foto" class="row g-3">
            @foreach ($galeris as $item)
                <div class="col-12 col-lg-4">
                    <a href="{{ $item->gambar ? asset('storage/' . $item->gambar) : $item->gambarUrl }}"
                        class="gallery-item"
                        data-lg-size="1600-1067"
                        data-sub-html="<h4>{{ $item->judul }}</h4><p>{{ $item->deskripsi }}</p>">
                        <div class="gallery-item-wrapper shadow-sm">
                            <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : $item->gambarUrl }}"
                            class="galeri-img"
                            alt="{{ $item->judul }}">
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        @if($galeris->count() >= $take)
            <div class="text-center mt-4">
                {{-- <button wire:click="loadMore" class="btn btn-secondary">Tampilkan Lebih Banyak</button> --}}
                <a href="galeri/show-galeri">
                    <button class="btn btn-secondary">Tampilkan Lebih Banyak</button>
                </a>
            </div>
        @endif
    </div>
</div>
