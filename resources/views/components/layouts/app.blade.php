<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="" name="description">
    <meta content="" name="keywords">
    
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Logo_Kota_Tasikmalaya.png/1201px-Logo_Kota_Tasikmalaya.png" type="image/png">
    
    <title>{{ config('app.name', 'DPMPTSP Kota Tasikmalaya') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"/>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/1/1e/Logo_Kota_Tasikmalaya.png">

    <!-- Google Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet"> --}}

    <!-- Vendor CSS Files -->
    <link href="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/css/style.css" rel="stylesheet">

    <!-- ===================== MASTER CSS ===================== -->
    <!-- Template Name: Mamba - v4.7.0 -->
    <!-- Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
    <!-- Author: BootstrapMade.com -->
    <!-- License: https://bootstrapmade.com/license/ -->

    {{-- <link rel="stylesheet" href="{{ asset('css/cards.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/galeri.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ikm.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ppid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/regulasi.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('styles')
    @livewireStyles
</head>
<body>  
    <livewire:top-bar/>    
    {{-- <livewire:navbar />     --}}
    
    <main>
        {{ $slot }}
    </main>
    
    <!-- Back to Top -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <livewire:footer />

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendor JS Files -->
    <script src="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/vendor/purecounter/purecounter.js"></script>
    <script src="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/vendor/aos/aos.js"></script>
    <script src="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/assets/js/main.js"></script>
    @stack('scripts')
</body>
</html>
