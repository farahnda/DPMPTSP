import lightGallery from 'lightgallery';

// Import plugins
import lgThumbnail from '@lg-plugins/thumbnail';

// Optional: Import CSS (agar gak perlu link CDN di <head>)
import 'lightgallery/css/lightgallery.css';
import 'lightgallery/css/lg-zoom.css';
import 'lightgallery/css/lg-thumbnail.css';

// Jalankan lightGallery saat DOM siap
document.addEventListener('DOMContentLoaded', function () {
    const gallery = document.getElementById('lightgallery-foto');
    if (gallery) {
        lightGallery(gallery, {
            selector: '.gallery-item',
            plugins: [lgZoom, lgThumbnail],
            speed: 500,
        });
    }
});

// Dropdown Behavior Script
document.addEventListener("DOMContentLoaded", function () {
    const isDesktop = window.innerWidth >= 992;
    
    // Tambah class hover di desktop, hapus di mobile
    document.querySelectorAll('.nav-item.dropdown').forEach(function (dropdown) {
        if (isDesktop) {
            dropdown.classList.add('dropdown-hover');
        } else {
            dropdown.classList.remove('dropdown-hover');
        }
    });

    // Auto close dropdown saat item diklik di mobile
    if (!isDesktop) {
        document.querySelectorAll('.dropdown-menu .dropdown-item').forEach(function (item) {
            item.addEventListener('click', function () {
                const dropdown = item.closest('.dropdown');
                const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
                const instance = bootstrap.Dropdown.getInstance(toggle);
                
                if (instance) {
                    instance.hide();
                }
            });
        });
    }
});
    
