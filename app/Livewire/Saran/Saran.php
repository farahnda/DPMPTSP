<?php

namespace App\Livewire\Saran;

use Livewire\Component;
use Illuminate\Support\Facades\Http; 

class Saran extends Component
{
    public $nama, $email, $komentar;

    public function submit()
    {
        $this->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'komentar' => 'required',
            'captcha' => 'required',
        ]);

        // Verifikasi CAPTCHA ke Google
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $this->captcha,
            'remoteip' => request()->ip(),
        ]);

        if (! $response->json('success')) {
            $this->addError('captcha', 'Captcha tidak valid.');
            return;
        }

        // Simpan data jika captcha valid
        Saran::create([
            'nama' => $this->nama,
            'email' => $this->email,
            'komentar' => $this->komentar,
        ]);

        session()->flash('success', 'Saran berhasil dikirim!');
        $this->reset();
    }
    
    public function render()
    {
        return view('livewire.saran.saran');
    }
}
