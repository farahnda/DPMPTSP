<div>
    <h2 class="mb-4 text-center">Video</h2>

    <br>
    <hr>
    <livewire:galeri.show-galeri>

    <br>
    <hr>

    <div class="container py-5 animated-heading">
        <h2 class="mb-4 text-center">Video</h2>
        <div id="lightgallery-foto" class="row g-3">
            @foreach ($videos as $vid)
            <div class="col-12 col-lg-4">
                @if ($vid->video)
                {{-- Video dari file upload --}}
                <div class="gallery-item-wrapper shadow-sm">
                    <video controls width="100%" class="galeri-img">
                        <source src="{{ asset('storage/' . $vid->video) }}" type="video/mp4">
                            Browser tidak mendukung video.
                        </video>
                        <div class="mt-2">
                            <h5>{{ $vid->judul }}</h5>
                            <p>{{ $vid->deskripsi }}</p>
                        </div>
                    </div>
                    @elseif ($vid->videoUrl)
                    {{-- Video dari URL (misal YouTube) --}}
                    <div class="gallery-item-wrapper shadow-sm">
                        <div class="ratio ratio-16x9">
                            <iframe src="{{ $vid->videoUrl }}" frameborder="0" allowfullscreen class="w-100"></iframe>
                        </div>
                    <div class="mt-2">
                        <h5>{{ $vid->judul }}</h5>
                        <p>{{ $vid->deskripsi }}</p>
                    </div>
                </div>
                @endif
            </div>
            @endforeach
            <a href="{{ route('berita-galeri.show-video') }}">
                <button class="btn btn-secondary">Lihat Lebih Banyak</button>
            </a>
        </div>
    </div>
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




