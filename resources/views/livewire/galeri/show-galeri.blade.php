<div>
    <hr>
    <div class="container py-5 animated-heading">
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
    </div>

    <hr>
</div>

@push('scripts')
<script>
    function initLightGallery() {
        const el = document.getElementById("lightgallery-foto");
        if (el && !el.classList.contains('lg-initialized')) {
            lightGallery(el, {
                selector: '.gallery-item',
                plugins: [lgZoom, lgThumbnail],
                speed: 500,
            });
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        initLightGallery();
    });

    document.addEventListener("livewire:load", function () {
        Livewire.hook('message.processed', () => {
            initLightGallery();
        });
    });
</script>
@endpush




