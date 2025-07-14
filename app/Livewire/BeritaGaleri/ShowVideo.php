<?php

namespace App\Livewire\BeritaGaleri;

use Livewire\Component;
use App\Models\Video;
class ShowVideo extends Component
{

    public function render()
    {
        $videos = Video::latest()->get();
        return view('livewire.berita-galeri.show-video', compact('videos'));
    }
}
