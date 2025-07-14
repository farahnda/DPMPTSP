<?php 
namespace App\Livewire\Beranda;

use Livewire\Component;

class Galeri extends Component
{

    public function render()
    {
        return view('livewire.beranda.galeri', [
            'galeris' => Galeri::all()
        ]);
    }
}