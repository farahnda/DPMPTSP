<div>
    <hr>
    <div class="container py-5">
        <div class="col-12 mb-4 text-center">
            <div class="section-title">Pengumuman</div>
        </div>
        <div id="lightgallery-pengumuman" class="row g-3">
            @foreach($pengumumans as $pengumuman)
            <div class="col-12 col-lg-4"
                data-aos="fade-up"
                data-aos-duration="600"
                data-aos-delay="{{ $loop->index * 150 }}">
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
        @endpush
    @endonce
</div>
