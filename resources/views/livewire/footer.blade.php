
        <footer class="text-white pt-4" style="background-color: #5D778D;">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-3 p-3 small">
                        <img class="w-100 mb-2" src="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/img/logo-dpmptsp-tasikmalaya.png" alt="Logo">
                        <p>Komplek Balekota, Jl. Letnan Harun No.1, Sukarindik, ec. Bungursari, Kota. Tasikmalaya, Jawa Barat 46113</p>
                        <p><strong>Phone:</strong> (0265) 314375<br>
                        <strong>Email:</strong> dpmptsp@tasikmalayakota.go.id</p>
                        <div class="social-links mb-4">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                    <div class="col-12 col-md-2 p-3">
                        <h6>Link Terkait</h6>
                        <ul>
                            @foreach ($relatedLinks as $link)
                                <li><a href="{{ $link['url'] }}" class="custom-link">{{ $link['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-12 col-md-3 p-3 small">
                        <h6>Berita Terbaru</h6>
                        <ul>
                            @foreach ($news as $item)
                                <li><a href="{{ $item['url'] }}" class="custom-link">{{ $item['title'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-12 col-md-4 p-3">
                        <h6>Pengumuman</h6>
                        <ul>
                            @foreach ($announcements as $item)
                                <li><a href="{{ $item['url'] }}" class="custom-link">{{ $item['title'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-white text-center p-3" style="background-color: #587086;">
                <p class="mb-0">&copy; {{ now()->year }} <strong>DPMPTSP</strong> Kota Tasikmalaya</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
