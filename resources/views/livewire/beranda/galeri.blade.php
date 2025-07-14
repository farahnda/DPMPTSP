<div>
    <div class="container py-5">
        <h2 class="mb-4 text-center">Galeri</h2>
        <div id="lightgallery-foto" class="row g-3">
            @foreach($photos as $photo)
            <div class="col-12 col-lg-4">
                <a href="{{ $photo['image'] }}" class="gallery-item" data-lg-size="1600-1067"
                    data-sub-html="<h4>{{ $photo['title'] }}</h4><p>{{ $photo['description'] }}</p>">
                    <div class="gallery-item-wrapper shadow-sm">
                        <img src="{{ $photo['image'] }}" alt="{{ $photo['title'] }}" class="img-fluid" />
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <hr>

    <div class="container py-5">
        <h2 class="mb-4 text-center">Pengumuman</h2>
        <div id="lightgallery-pengumuman" class="row g-3">
            @foreach($pengumumans as $pengumuman)
            <div class="col-12 col-lg-4">
                <a href="{{ $pengumuman['image'] }}" class="gallery-item" data-lg-size="1600-1067"
                    data-sub-html="<h4>{{ $pengumuman['title'] }}</h4><p>{{ $pengumuman['description'] }}</p>">
                    <div class="gallery-item-wrapper-auto shadow-sm">
                        <img src="{{ $pengumuman['image'] }}" alt="{{ $pengumuman['title'] }}" class="img-fluid pengumuman-img" />
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    @once
        @push('scripts')
        <!-- LightGallery JS -->
        <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.umd.min.js"></script>
        <script>
            function initGallery() {
                const galleries = ['lightgallery-foto', 'lightgallery-pengumuman'];

                galleries.forEach(id => {
                    const container = document.getElementById(id);
                    if (container) {
                        if (container.lgInstance) {
                            container.lgInstance.destroy();
                        }
                        lightGallery(container, {
                            selector: '.gallery-item',
                            plugins: [lgZoom, lgThumbnail],
                            speed: 500,
                        });
                    }
                });
            }

            document.addEventListener('livewire:load', () => {
                initGallery();
            });

            document.addEventListener('livewire:navigated', () => {
                initGallery();
            });
        </script>
        @endpush
    @endonce
</div>
