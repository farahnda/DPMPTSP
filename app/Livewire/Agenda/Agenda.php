<?php

namespace App\Livewire\Agenda;

use Livewire\Component;

class Agenda extends Component
{
        public $agenda = [];

    public function mount()
    {
        $this->agenda = [
        ['tanggal' => '2022-06-01', 'judul' => 'Pelaksanaan Peringatan Hari Lahir Pancasila Tahun 2022 Tingkat Kota Tasikmalaya'],
        ['tanggal' => '2022-06-03', 'judul' => 'Sosialisasi Penyusunan Dokumen ANJAB dan ABK'],
        ['tanggal' => '2022-06-06', 'judul' => 'Peringatan Hari Lingkungan Hidup Dunia Tahun 2022 Tingkat Kota Tasikmalaya'],
        ['tanggal' => '2022-06-06', 'judul' => 'Rapat Kerja Evaluasi Tindak Lanjut LHP BPK RI'],
        ['tanggal' => '2022-06-06', 'judul' => 'Penyusunan Naskah Akademik dan Raperda tentang Jasa Konstruksi'],
        ['tanggal' => '2022-06-07', 'judul' => 'Rapat Paripurna'],
        ['tanggal' => '2022-06-07', 'judul' => 'Rapat Lanjutan Perumusan Instruksi Walikota tentang Optimalisasi Pelaksanaan JKN'],
        ['tanggal' => '2022-06-07', 'judul' => 'Pelantikan dan Pengambilan Sumpah JPT Pratama dan Pengambilan Sumpah Kepala Sekolah di Lingkungan Pemerintah Kota Tasikmalaya'],
        ['tanggal' => '2022-06-08', 'judul' => 'Pembahasan Ranperwal Kawasan Tanpa Rokok (KTR)'],
        ['tanggal' => '2022-06-11', 'judul' => 'Narasumber untuk Kuliah Umum "Inovasi Pelayanan Publik di Era Digital"'],
        ['tanggal' => '2022-06-13', 'judul' => 'Rapat Persiapan Mengikuti MTQ Ke-37 Tingkat Provinsi Jawa Barat'],
        ['tanggal' => '2022-06-14', 'judul' => 'Evaluasi Realisasi APBD TA 2021'],
        ['tanggal' => '2022-06-15', 'judul' => 'Pembahasan Ranperwal Kawasan Tanpa Rokok (KTR)'],
        ['tanggal' => '2022-06-17', 'judul' => 'Sosialisasi Sistem Kerja dan Budaya Kerja pada Perangkat Daerah di Lingkungan Pemerintah Kota Tasikmalaya'],
        ['tanggal' => '2022-06-17', 'judul' => 'Rapat Koordinasi Darma Wanita Persatuan Tingkat Kota Tasikmalaya'],
        ['tanggal' => '2022-06-20', 'judul' => 'Pembahasan Pengelolaan Sampah oleh PT. Arum Daya Energi'],
        ['tanggal' => '2022-06-22', 'judul' => 'BIMTEK dan Ujian Sertifikasi Level 1 Pengadaan Barang/Jasa Pemerintah sesuai dengan Perpres No.12 Tahun 2021'],
        ['tanggal' => '2022-06-22', 'judul' => 'Penyusunan Masterplan Smart City'],
        ['tanggal' => '2022-06-22', 'judul' => 'Pembahasan Rencana Kerja'],
        ['tanggal' => '2022-06-23', 'judul' => 'Rapat Koordinasi'],
        ['tanggal' => '2022-06-28', 'judul' => 'Mewujudkan Satu Data Kota Tasikmalaya'],
        ['tanggal' => '2022-06-28', 'judul' => 'Rapat Koordinasi'],
        ['tanggal' => '2022-06-30', 'judul' => 'Rapat Koordinasi'],
        ['tanggal' => '2022-07-04', 'judul' => 'Rapat Koordinasi'],
        ['tanggal' => '2022-07-06', 'judul' => 'Pembahasan Ranperwal Kawasan Tanpa Rokok (KTR)'],
        ['tanggal' => '2022-07-10', 'judul' => 'Shalat Sunat Idul Adha 1433H'],
        ['tanggal' => '2022-07-11', 'judul' => 'Data Kepersertaan SPI Pemerintah Kota Tasikmalaya Tahun 2022'],
        ['tanggal' => '2022-07-12', 'judul' => 'Undangan Peserta Kegiatan Diseminasi RANHAM Tahun 2022'],
        ['tanggal' => '2022-07-12', 'judul' => 'Rapat Persiapan Rakernas'],
        ['tanggal' => '2022-07-13', 'judul' => 'Rapat Paripurna DPRD Kota Tasikmalaya'],
        ['tanggal' => '2022-07-13', 'judul' => 'Penyusunan Masterplan Smart City Tahap II'],
        ['tanggal' => '2022-07-13', 'judul' => 'Rapat Dengar Pendapat Umum (Audiensi)'],
        ['tanggal' => '2022-07-13', 'judul' => 'Rapat Teknis Persiapan Acara Rakernas APEKSI Ke-22'],
        ['tanggal' => '2022-07-14', 'judul' => 'Penyusunan Masterplan Smart City Tahap II'],
        ['tanggal' => '2022-07-19', 'judul' => 'Sosialisasi Peraturan Wali Kota Tasikmalaya tentang Kesehatan Ibu dan Bayi'],
        ['tanggal' => '2022-07-20', 'judul' => 'Rapat Monitoring dan Evaluasi Bidang PIK Triwulan II'],
        ['tanggal' => '2022-07-20', 'judul' => 'Rapat Persiapan Ekspose Kinerja Pembangunan Triwulan II T/A 2022'],
        ['tanggal' => '2022-07-21', 'judul' => 'Sosialisasi Aplikasi Sispek'],
        ['tanggal' => '2022-07-25', 'judul' => 'Sosialisasi Pengisian F-01 dan F-03 PEKPPP'],
        ['tanggal' => '2022-07-25', 'judul' => 'Percepatan Pencapaian Maturitas SPIP Terintegrasi Kota Tasikmalaya pada Level 3'],
        ['tanggal' => '2022-07-26', 'judul' => 'Ekspose Kinerja Pembangunan Triwulan II T/A 2022'],
        ['tanggal' => '2022-07-26', 'judul' => 'Rapat Koordinasi'],
        ['tanggal' => '2022-07-29', 'judul' => 'Doa Bersama dalam Menyambut 1 Muharram 1444 H'],
        ['tanggal' => '2022-07-29', 'judul' => 'Koordinasi Persiapan Penilaian Ombudsman RI Tahun 2022'],
        ['tanggal' => '2022-07-29', 'judul' => 'Pelepasan Kontingen PORSADIN VI Tingkat Provinsi Jawa Barat'],
        ['tanggal' => '2022-08-01', 'judul' => 'Rapat Koordinasi Kearsipan'],
        ['tanggal' => '2022-08-02', 'judul' => 'Undangan Pembukaan Presentasi, Kompetensi Inovasi, dan Teknologi Tahun 2022'],
        ['tanggal' => '2022-08-04', 'judul' => 'Rapat Koordinasi Kependudukan Tahun 2022'],
        ['tanggal' => '2022-08-04', 'judul' => 'Sosialisasi Penilaian Penyelenggaraan Pelayanan Publik Tahun 2022'],
        ['tanggal' => '2022-08-04', 'judul' => 'Rapat Paripurna'],
        ['tanggal' => '2022-08-09', 'judul' => 'Rapat Dengar Pendapat Umum (Audiensi)'],
        ['tanggal' => '2022-08-11', 'judul' => 'Undangan Bimbingan Teknis Survei'],
        ['tanggal' => '2022-08-15', 'judul' => 'Launching/Peresmian Pasar Rakyat Cibeureum'],
        ['tanggal' => '2022-08-16', 'judul' => 'Rapat Paripurna'],
        ['tanggal' => '2022-08-18', 'judul' => 'Rapat Paripurna'],
        ['tanggal' => '2022-08-18', 'judul' => 'Finansial Proposal KIJB dan IGA'],
        ['tanggal' => '2022-08-22', 'judul' => 'Undangan Konsiyering Optimalisasi Penerimaan Pajak Pusat dan Pajak Daerah'],
        ['tanggal' => '2022-08-23', 'judul' => 'Sosialisasi & Rapat Koordinasi'],
        ['tanggal' => '2022-08-24', 'judul' => 'Undangan Sosialisasi P3DN'],
        ['tanggal' => '2022-08-24', 'judul' => 'Diseminasi Pertumbuhan Perekonomian Triwulan II-2022'],
        ['tanggal' => '2022-08-25', 'judul' => 'Undangan Public Service of the Year Jawa Barat'],
        ['tanggal' => '2022-08-28', 'judul' => 'Verifikasi Akhir Penyusunana Dokumen ANJAB dan ABK'],
        ['tanggal' => '2022-08-30', 'judul' => 'Undangan Pembinaan Kedisiplinan ASN'],
        ['tanggal' => '2022-08-31', 'judul' => 'Undangan Penyusunan Masterplan Smart City Tahap III'],
    ];
    }
    public function render()
    {
        return view('livewire.agenda.agenda');
    }
}
