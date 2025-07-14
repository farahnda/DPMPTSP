<?php 
namespace App\Livewire\Beranda;

use Livewire\Component;

class Galeri extends Component
{
    public $photos = [];
    public $pengumumans = [];   
    public function mount()
    {
        $this->photos = [
            [
                'title' => 'Turut Berduka',
                'description' => 'Ucapan belasungkawa dari DPMPTSP.',
                'image' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/6700Turut%20Berduka.jpeg'
            ],
            [
                'title' => 'Maklumat Pelayanan',
                'description' => 'Maklumat pelayanan DPMPTSP.',
                'image' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/6644Maklumat%20Pelayanan%202023_page-0001.jpg'
            ],
            [
                'title' => 'Visi dan Misi',
                'description' => 'Visi dan Misi Pelayanan.',
                'image' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/2043Visi%20dan%20Misi.jpg'
            ],
            [
                'title' => 'Penyerahan NIB',
                'description' => 'Penyerahan NIB',
                'image' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/1505WhatsApp%20Image%202023-08-18%20at%2013.06.55.jpeg'
            ],
            [
                'title' => 'PEPELING',
                'description' => 'Pengecekan Kesiapan Grand Opening Wisata Tematik.',
                'image' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/9724WhatsApp%20Image%202023-08-18%20at%2013.06.38.jpeg'
            ],
            [
                'title' => 'PEPELING 2',
                'description' => 'Pengecekan Kesiapan Grand Opening Wisata Tematik.',
                'image' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/8077WhatsApp%20Image%202023-08-18%20at%2013.05.01.jpeg'
            ],
        ];

        $this->pengumumans = [
            [
                'title' => 'SIMBG',
                'description' => 'Pengajuan PBG',
                'image' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/4950peng1.jpg'
            ],
            [
                'title' => 'SIMBG',
                'description' => 'Pengajuan PBG',
                'image' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/4950peng1.jpg'
            ],
            [
                'title' => 'Layanan BPMPTSP',
                'description' => 'Layanan BPMPTSP.',
                'image' => 'https://dpmptsp.tasikmalayakota.go.id/public_html/desktop/assets/img/2791dpmptsp.jpg'
            ],
        ];
    }

    public function render()
    {
        return view('livewire.beranda.galeri', [
            'photos' => $this->photos,
            'pengumumans' => $this->pengumumans,
        ]);
    }
}