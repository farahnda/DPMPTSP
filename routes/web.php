<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\PenanamanModal\Regulasi;
use App\Livewire\Informasi\IKM;
use App\Livewire\Saran\Saran;
use App\Livewire\PPID\PPID;


Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/regulasi', Regulasi::class)->name('regulasi');

Route::get('/ikm', action: IKM::class)->name('ikm');

Route::get('/saran', action: Saran::class)->name('saran');

Route::get('/ppid', action: PPID::class)->name('ppid');


// Route::get('regulasi', function () {
//     return view('regulasi');
// })->name('regulasi');


// Route::get('regulasi', function () {
//     return view('regulasi');
// })->name('regulasi');

// Route::get('gambar', function () {
//     return view('gambar');
// })->name('gambar');

// Route::get('footer', function () {
//     return view('footer');
// })->name('footer');

// Route::get('carousel', function () {
//     return view('carousel');
// })->name('carousel');

// Route::get('galeri', function () {
//     return view(view: 'galeri');
// })->name('galeri');

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
