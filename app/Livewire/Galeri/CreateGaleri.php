<?php

namespace App\Livewire\Galeri;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Galeri;

class CreateGaleri extends Component
{
    use WithFileUploads;

    public $judul, $deskripsi, $gambar, $gambarUrl;

    public function save()
    {
        $this->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'gambar' => 'nullable|image|max:2048',
        'gambarUrl' => 'nullable|url',
    ]);

    if ($this->gambar && $this->gambarUrl) {
        $this->addError('gambar', 'Pilih hanya satu sumber gambar: upload atau URL.');
        return;
    }

    if (!$this->gambar && !$this->gambarUrl) {
        $this->addError('gambar', 'Wajib memilih satu sumber gambar.');
        return;
    }

    if ($this->gambar) {
    $path = $this->gambar->store('galeri', 'public');

    Galeri::create([
        'judul' => $this->judul,
        'deskripsi' => $this->deskripsi,
        'gambar' => $path,
        'gambarUrl' => null,
    ]);
} else {
    Galeri::create([
        'judul' => $this->judul,
        'deskripsi' => $this->deskripsi,
        'gambar' => null,
        'gambarUrl' => $this->gambarUrl,
    ]);
}


    session()->flash('message', 'Foto berhasil ditambahkan.');
    $this->reset();
    }
    
    public function render()
    {
        return view('livewire.galeri.create-galeri');
    }
}
