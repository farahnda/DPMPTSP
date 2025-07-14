<?php

namespace App\Livewire\Informasi;

use Livewire\Component;

class IKM extends Component
{
    public $ikms = [];

     public function mount()
    {
        $this->ikms = [
            [
                'title' => 'Hasil Survei Index Kepuasan Masyarakat Tahun 2021',
                'pdf' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/1755ikm%202021.pdf'
            ],
            [
                'title' => 'Hasil Survei sampai dengan bulan Mei',
                'pdf' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/8847Indeks%20kepuasan%20masyarakat.pdf'
            ],
            [
                'title' => 'Hasil Survei IKM',
                'pdf' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/8728IKM%20Mei_IKM%20Juni_merged.pdf'
            ],
            [
                'title' => 'Hasil Survei IKM sampai dengan Bulan Juli',
                'pdf' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/9147Indeks%20kepuasan%20masyarakat%20Juli.pdf'
            ],
            [
                'title' => 'Hasil Survei IKM sampai dengan Bulan Agustus',
                'pdf' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/4634IKM%20Agustus.pdf'
            ],
            [
                'title' => 'Hasil Survei IKM sampai dengan Bulan September',
                'pdf' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/2740IKM%20September.pdf'
            ],
            [
                'title' => 'Hasil Survei Index Kepuasan Masyarakat Tahun 2022',
                'pdf' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/3412LAPORAN%20SKM%20DPMPTSP%202022.pdf'
            ],
            [
                'title' => 'Hasil Survei Index Kepuasa Masyarakat Triwulan I Tahun 2023',
                'pdf' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/9480IKM%20TWI%202023.pdf'
            ],
            [
                'title' => 'Hasil Survei Index Kepuasa Masyarakat Triwulan II Tahun 2023',
                'pdf' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/4711IKM%20TWII%202023.pdf'
            ],
        ];
    }

    public function render()
    {
        $chunked = array_chunk($this->ikms, 3);
        return view('livewire.informasi.ikm', [
            'chunkedikm' => $chunked
        ]);    }
}
