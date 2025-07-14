<?php

namespace App\Livewire\BeritaGaleri;

use Livewire\Component;
use App\Models\Video;
class BeritaGaleri extends Component
{

    public function render()
    {
        $videos = Video::latest()->take(3)->get();
        return view('livewire.berita-galeri.berita-galeri', compact( 'videos'));
    }
}