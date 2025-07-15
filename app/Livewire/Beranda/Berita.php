<?php

namespace App\Livewire\Beranda;

use Livewire\Component;

class Berita extends Component
{
    public $beritaUtama = [
        [
            'tanggal' => '23 Juli 2024',
            'judul' => 'GeCe 112',
            'isi' => 'Peresmian Call Center Gerak Cepat 112 (Ge-Ce 112) dilakukan di halaman Kantor Bale Kota Tasikmalaya pada Selasa, 19 Maret 2024 dengan menggelar Apel Kesiapsiagaan Tingkat Kota Tasikmalaya.',
            'gambar' => 'image/gece.jpg',
            'url' => '#'
        ],
        [
            'tanggal' => '22 November 2022',
            'judul' => 'Gebyar 1.000 NIB Sehari Tingkat Provinsi Jawa Barat Tahun 2022',
            'isi' => 'Hari Selasa (22/11) telah diadakan Gebyar 1.000 NIB Sehari Tingkat Provinsi Jawa Barat Tahun 2022 bagi pelaku usaha di Kota Tasikmalaya.',
            'gambar' => 'image/gebyar.jpeg',
            'url' => '#'
        ],
        [
            'tanggal' => '15 November 2022',
            'judul' => 'Terima Kasih kepada Walikota Tasikmalaya',
            'isi' => 'Terima kasih kepada Walikota Tasikmalaya yang telah melantik Pj. Walikota Tasikmalaya pada hari Selasa, 15 November 2022.',
            'gambar' => 'image/terimakasih-walikota.jpeg',
            'url' => '#'
        ]
    ];

    public $beritaLainnya = [
        ['judul' => 'GeCe 112', 'tanggal' => 'Selasa, 23 Juli 2024', 'url' => '#'],
        ['judul' => 'Gebyar 1.000 NIB Sehari Tingkat Provinsi Jawa Barat Tahun 2022', 'tanggal' => 'Selasa, 22 November 2022', 'url' => '#'],
        ['judul' => 'Terima Kasih kepada Walikota Tasikmalaya', 'tanggal' => 'Selasa, 15 November 2022', 'url' => '#'],
        ['judul' => 'Pelantikan PJ Walikota Tasikmalaya', 'tanggal' => 'Selasa, 15 November 2022', 'url' => '#'],
        ['judul' => 'GRAND OPENING MAL PELAYANAN PUBLIK', 'tanggal' => 'Kamis, 20 Oktober 2022', 'url' => '#'],
        ['judul' => 'Kegiatan Merayakan HUT RI Ke-77', 'tanggal' => 'Selasa, 6 September 2022', 'url' => '#'],
        ['judul' => 'BIMTEK/SOSIALISASI PELAPORAN KEGIATAN PENANAMAN MODAL, IMPLEMENTASI PERIZINAN BERUSAHA BERBASIS RESIKO DAN IMPLEMENTASI PENGAWASAN PERIZINAN BERUSAHA BERBASIS RESIKO', 'tanggal' => 'Kamis, 28 Juli 2022', 'url' => '#'],
        ['judul' => 'RAPAT PEMBAHASAN PENDAPATAN / RETRIBUSI BERSAMA SKPD PENGHASIL DALAM KUA PPAS 2023', 'tanggal' => 'Jumat, 22 Juli 2022', 'url' => '#'],
        ['judul' => 'SOSIALISASI AKTIVASI TTE DAN OPERASIONALISASI APLIKASI TNDE (APLIKASI SURESMAN DAN AKTIVASI TANDA TANGAN ELEKTRONIK)', 'tanggal' => 'Kamis, 21 Juli 2022', 'url' => '#'],
        ['judul' => 'KEGIATAN AKTIVASI TANDA TANGAN ELEKTRONIK (TTE) DI DINAS PMPTSP', 'tanggal' => 'Selasa, 19 Juli 2022', 'url' => '#'],
        ['judul' => 'DISDUKCAPIL UJI COBA INTERNAL KTP DIGITAL DI WILAYAH PEMKOT', 'tanggal' => 'Selasa, 12 Juli 2022', 'url' => '#'],
        ['judul' => 'RAPAT PERSIAPAN GRAND OPENING MAL PELAYANAN PUBLIK', 'tanggal' => 'Selasa, 12 Juli 2022', 'url' => '#'],
        ['judul' => 'Uji Coba Mall Pelayanan Publik Pemkot Tasik, Perizinan Bisa Lebih Mudah Dan Cepat', 'tanggal' => 'Selasa, 12 Juli 2022', 'url' => '#'],
        ['judul' => 'TAHUN 2023 PEMERINTAH KOTA TASIKMALAYA AKAN FOKUSKAN PENYEMPURNAAN INFRASTRUKTUR', 'tanggal' => 'Jumat, 8 April 2022', 'url' => '#'],
    ];


    public function render()
    {
        return view('livewire.beranda.berita', [
            'beritaUtama' => $this->beritaUtama,
            'beritaLainnya' => $this->beritaLainnya
        ]);
    }
}