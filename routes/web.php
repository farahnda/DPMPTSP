<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Beranda\Beranda;
use App\Livewire\Beranda\GaleriBeranda;
use App\Livewire\Beranda\Pengumuman;
use App\Livewire\PenanamanModal\Regulasi;
use App\Livewire\Informasi\IKM;
use App\Livewire\PPID\PPID;
use App\Livewire\Galeri\CreateGaleri;
use App\Livewire\Galeri\ShowGaleri;
use App\Livewire\BeritaGaleri\CreateVideo;
use App\Livewire\BeritaGaleri\ShowVideo;
use App\Livewire\BeritaGaleri\BeritaGaleri;

Route::get('/', Beranda::class)->name('beranda');

Route::get('/regulasi', Regulasi::class)->name('regulasi');

Route::get('/ikm', action: IKM::class)->name('ikm');

Route::get('/ppid', action: PPID::class)->name('ppid');

Route::get('galeri/create', CreateGaleri::class)->name('galeri.create');
Route::get('/galeri/show-galeri', action: ShowGaleri::class)->name('galeri.show');
Route::get('beranda/galeri-beranda', GaleriBeranda::class)->name('beranda.galeri-beranda');

Route::get('berita-galeri/create', CreateVideo::class)->name('berita-galeri.create');
Route::get('/berita-galeri/show-video', ShowVideo::class)->name('berita-galeri.show-video');
Route::get('/berita-galeri', BeritaGaleri::class)->name('berita-galeri.berita-galeri');

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
