<?php

namespace App\Livewire\Beranda;

use Livewire\Component;
use App\Models\Galeri;

class CreateGaleri extends Component
{
    public $judul, $deskripsi, $gambar;

    protected $rules = [
        'judul' => 'required|string|max:255',
        'deskripsi' => 'nullable|string',
        'gambar' => 'required|string',
    ];

    public function simpan()
    {
        $this->validate();

        Galeri::create([
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'gambar' => $this->gambar,
        ]);

        session()->flash('success', 'Galeri berhasil ditambahkan.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.beranda.create-galeri');
    }
}
