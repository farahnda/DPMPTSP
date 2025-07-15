<div>
    <hr>
    <div class="container py-5">
        <div class="col-12 mb-4 text-center">
            <div class="section-title">Galeri</div>
        </div>
        <div id="lightgallery-foto" class="row g-3">
            @foreach ($galeris as $item)
            <div class="col-12 col-lg-4"
                data-aos="fade-up"
                data-aos-duration="600"
                data-aos-delay="{{ $loop->index * 150 }}">
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
            <div class="text-end mt-4">
                {{-- <button wire:click="loadMore" class="btn btn-secondary">Tampilkan Lebih Banyak</button> --}}
                <a href="galeri/show-galeri">
                    <button class="btn btn-custom-lainnya">Tampilkan Lebih Banyak</button>
                </a>
            </div>
        @endif
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    AOS.init({
      once: false,
      duration: 800,
      easing: 'ease-out-cubic',
    });
  });
</script>

