<?php

namespace App\Livewire\Beranda;

use Livewire\Component;
use App\Models\Galeri;

class GaleriBeranda extends Component
{
    public $take = 6;

    public function loadMore()
    {
        $this->take += 6;
    }

    public function render()
    {
        $galeris = Galeri::latest()->take($this->take)->get();
        return view('livewire.beranda.galeri-beranda', [
            'galeris' => $galeris,
            'take' => $this->take,
        ]);
    }
}
