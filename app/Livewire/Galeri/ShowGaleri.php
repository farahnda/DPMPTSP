<?php

namespace App\Livewire\Galeri;

use Livewire\Component;
use App\Models\Galeri;
class ShowGaleri extends Component
{
    // public $take = 12;

    // public function loadMore()
    // {
    //     $this->take += 12;
    // }

    public function render()
    {
        $galeris = Galeri::latest()->get(); // Ambil semua galeri, terbaru duluan
        return view('livewire.galeri.show-galeri', compact('galeris'));
    }
}
