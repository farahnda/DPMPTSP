<?php

namespace App\Livewire\Saran;

use Livewire\Component;
use Illuminate\Support\Facades\Http; 
use App\Models\Saran as SaranModel;

class Saran extends Component
{
    public $nama, $email, $no_hp, $komentar, $captcha;

    public function submit()
    {
        $this->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'no_hp' => 'required|string|max:20',
            'komentar' => 'required',
            'captcha' => 'required', // wajib
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
        SaranModel::create([
            'nama' => $this->nama,
            'email' => $this->email,
            'no_hp' => $this->no_hp,
            'komentar' => $this->komentar,
        ]);

        session()->flash('success', 'Saran berhasil dikirim!');
        $this->reset();
        $this->captcha = null;
    }
    
    public function render()
    {
        return view('livewire.saran.saran');
    }
}
