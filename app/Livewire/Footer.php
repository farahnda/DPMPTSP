<?php

namespace App\Livewire;

use Livewire\Component;

class Footer extends Component
{
    public $relatedLinks = [
        ['name' => 'Diskominfo', 'url' => 'https://diskominfo.tasikmalayakota.go.id/'],
        ['name' => 'Portal Tasikmalaya', 'url' => 'https://portal.tasikmalayakota.go.id/'],
        ['name' => 'Sipentas', 'url' => 'http://sipentas.tasikmalayakota.go.id/'],
    ];

    public $news = [
        ['title' => 'TAHUN 2023 PEMERINTAH KOTA TASIKMALAYA AKAN FOKUSKAN PENYEMPURNAAN INSFRATRUKTUR', 'url' => 'https://dpmptsp.tasikmalayakota.go.id/detail-berita?id_berita=10'],
        ['title' => 'Uji Coba Mall Pelayanan Publik Pemkot Tasik, Perizinan Bisa Lebih Mudah Dan Cepat', 'url' => 'https://dpmptsp.tasikmalayakota.go.id/detail-berita?id_berita=13'],
        ['title' => 'RAPAT PERSIAPAN GRAND OPENING MAL PELAYANAN PUBLIK', 'url' => 'https://dpmptsp.tasikmalayakota.go.id/detail-berita?id_berita=14'],
    ];

    public $announcements = [
        ['title' => 'Informasi Layanan Taspen Asabri', 'url' => 'https://dpmptsp.tasikmalayakota.go.id/detail-pengumuman?id_pengumuman=53'],
        ['title' => 'Informasi Layanan DPMPTSP Provinsi', 'url' => 'https://dpmptsp.tasikmalayakota.go.id/detail-pengumuman?id_pengumuman=52'],
        ['title' => 'Informasi Layanan Kesbangpol', 'url' => 'https://dpmptsp.tasikmalayakota.go.id/detail-pengumuman?id_pengumuman=51'],
        ['title' => 'Informasi Layanan Dinas Pendidikan', 'url' => 'https://dpmptsp.tasikmalayakota.go.id/detail-pengumuman?id_pengumuman=50'],
        ['title' => 'Informasi Layanan Taspen Asabri', 'url' => 'https://dpmptsp.tasikmalayakota.go.id/detail-pengumuman?id_pengumuman=49'],
    ];

    public function render()
    {
        return view('livewire.footer');
    }

}
