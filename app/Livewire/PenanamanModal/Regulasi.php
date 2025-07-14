<?php

namespace App\Livewire\PenanamanModal;

use Livewire\Component;

/**
 * @method \Livewire\Component layout(string $view, array $params = [])
 */
class Regulasi extends Component
{
    public $regulasis = [];

    public function mount()
    {
        $this->regulasis = [
            [
                'title' => 'Peraturan Wali Kota Tasikmalaya Nomor 48 Tahun 2021 tentang Susunan Organisasi, Kedudukan, Tugas Pokok, Fungsi, dan Tata Kerja Perangkat Daerah',
                'pdf' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/2866PERWAL%20SOTK%20NO%2048%20TAHUN%202021.pdf'
            ],
            [
                'title' => 'PERATURAN WALI KOTA TASIKMALAYA NOMOR 58 TAHUN 2017',
                'pdf' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/5073PERWALKOT%20NO.58.pdf'
            ],
            [
                'title' => 'SOP OSS RBA',
                'pdf' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/1146SOP%20OSS%20RBA_11zon.pdf'
            ],
        ];
    }

    /**
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.penanaman-modal.regulasi');
        }
}
