<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Beranda\Beranda;
use App\Livewire\Beranda\GaleriBeranda;
use App\Livewire\Beranda\Pengumuman;
use App\Livewire\PenanamanModal\Regulasi;
use App\Livewire\Informasi\IKM;
use App\Livewire\PPID\PPID;
use App\Livewire\Saran\Saran;
use App\Livewire\Galeri\CreateGaleri;
use App\Livewire\Galeri\ShowGaleri;
use App\Livewire\BeritaGaleri\CreateVideo;
use App\Livewire\BeritaGaleri\ShowVideo;
use App\Livewire\BeritaGaleri\BeritaGaleri;

Route::get('/', Beranda::class)->name('beranda');
Route::get('/regulasi', Regulasi::class)->name('regulasi');
Route::get('/ikm', IKM::class)->name('ikm');
Route::get('/ppid', PPID::class)->name('ppid');
Route::get('/kontak', Saran::class)->name('saran');

Route::get('/galeri/create', CreateGaleri::class)->name('galeri.create');
Route::get('/galeri/show-galeri', ShowGaleri::class)->name('galeri.show');
Route::get('/beranda/galeri-beranda', GaleriBeranda::class)->name('beranda.galeri-beranda');

Route::get('/berita-galeri/create', CreateVideo::class)->name('berita-galeri.create');
Route::get('/berita-galeri/show-video', ShowVideo::class)->name('berita-galeri.show-video');
Route::get('/berita-galeri', BeritaGaleri::class)->name('berita-galeri.berita-galeri');

Route::get('/profile', \App\Livewire\Tentang\Profile::class)->name('Profile');
Route::get('/profile-pelaksana', \App\Livewire\Tentang\ProfilePelaksana::class)->name('Profile Pelaksana');
Route::get('/profile-kadis', \App\Livewire\Tentang\ProfileKadis::class)->name('Profile Kepala Dinas');
Route::get('/struktur-organisasi', \App\Livewire\Tentang\StrukturOrganisasi::class)->name('Struktur Organisasi');
Route::get('/agenda', \App\Livewire\Tentang\Agenda::class)->name('Agenda');
Route::get('/renstra', \App\Livewire\Tentang\Renstra::class)->name('Renstra');
Route::get('/tupoksi', \App\Livewire\Tentang\Tupoksi::class)->name('Tupoksi');
Route::get('/program-kerja', \App\Livewire\Tentang\ProgramKerja::class)->name('Program Kerja');
Route::get('/kegiatan', \App\Livewire\Tentang\Kegiatan::class)->name('Kegiatan');
Route::get('/data-izin-terbit', \App\Livewire\PelayananPerizinan\DataIzinTerbit::class)->name('Data Izin Terbit');

Route::get('/potensi-investasi', \App\Livewire\PenanamanModal\PotensiInvestasi::class)->name('Potensi Investasi');
Route::get('/realisasi-investasi', \App\Livewire\PenanamanModal\RealisasiInvestasi::class)->name('Realisasi Investasi');
Route::get('/promosi-investasi', \App\Livewire\PenanamanModal\PromosiInvestasi::class)->name('Promosi Investasi');

Route::get('/l-k-i-p', \App\Livewire\Informasi\Lkip::class)->name('LKIP');
Route::get('/s-a-k-i-p', \App\Livewire\Informasi\Sakip::class)->name('SAKIP');
// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

// require __DIR__.'/auth.php';
