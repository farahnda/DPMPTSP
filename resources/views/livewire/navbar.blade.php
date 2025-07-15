<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container mt-2-fluid">

    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="{{ asset('image/logo-dpmptsp-tasikmalaya.png') }}" alt="Logo DPMPTSP" height="40" class="me-2">
    </a>

    <!-- Toggle Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
      aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <!-- Navbar Menu -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarMain">
      <ul class="navbar-nav gap-2">

        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">BERANDA</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown1" role="button" data-bs-toggle="dropdown"
             aria-expanded="false">TENTANG</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown1">
            <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
            <li><a class="dropdown-item" href="{{ url('/profile-pelaksana') }}">Profile Pelaksana</a></li>
            <li><a class="dropdown-item" href="{{ url('/profile-kadis') }}">Profile Kepala Dinas</a></li>
            <li><a class="dropdown-item" href="{{ url('/struktur-organisasi') }}">Struktur Organisasi</a></li>
            <li><a class="dropdown-item" href="{{ url('/agenda') }}">Agenda</a></li>
            <li><a class="dropdown-item" href="{{ url('/renstra') }}">Renstra</a></li>
            <li><a class="dropdown-item" href="{{ url('/tupoksi') }}">Tupoksi</a></li>
            <li><a class="dropdown-item" href="{{ url('/program-kerja') }}">Program Kerja</a></li>
            <li><a class="dropdown-item" href="{{ url('/kegiatan') }}">Kegiatan</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown2" role="button" data-bs-toggle="dropdown"
             aria-expanded="false">PELAYANAN PERIZINAN</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown2">
            <li><a class="dropdown-item" href="https://oss.go.id/" target="_blank">OSS</a></li>
            <li><a class="dropdown-item" href="https://new.sipentas.tasikmalayakota.go.id/" target="_blank">Sipentas</a></li>
            <li><a class="dropdown-item" href="https://oss.go.id/regulasi" target="_blank">Regulasi</a></li>
            <li><a class="dropdown-item" href="http://sispek.tasikmalayakota.go.id/front/detailpelayanan/23" target="_blank">Standar Pelayanan</a></li>
            <li><a class="dropdown-item" href="{{ url('/data-izin-terbit') }}">Data Izin Terbit</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown3" role="button" data-bs-toggle="dropdown"
             aria-expanded="false">PENANAMAN MODAL</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown3">
            <li><a class="dropdown-item" href="https://lkpmonline.bkpm.go.id/lkpm_perka17/login.jsp" target="_blank">LKPM</a></li>
            <li><a class="dropdown-item" href="{{ url('/potensi-investasi') }}">Potensi Investasi</a></li>
            <li><a class="dropdown-item" href="{{ url('/realisasi-investasi') }}">Realisasi Investasi</a></li>
            <li><a class="dropdown-item" href="{{ url('/promosi-investasi') }}">Promosi Investasi</a></li>
            <li><a class="dropdown-item" href="{{ url('/regulasi') }}">Regulasi</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown4" role="button" data-bs-toggle="dropdown"
             aria-expanded="false">INFORMASI</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown4">
            <li><a class="dropdown-item" href="{{ url('/ikm') }}">IKM</a></li>
            <li><a class="dropdown-item" href="{{ url('/l-k-i-p') }}">LKIP</a></li>
            <li><a class="dropdown-item" href="{{ url('/s-a-k-i-p') }}">SAKIP</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="{{ url('/kontak') }}">SARAN DAN ADUAN</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/berita-galeri') }}">BERITA DAN GALERI</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown8" role="button" data-bs-toggle="dropdown"
             aria-expanded="false">PPID</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown8">
            <li><a class="dropdown-item" href="https://ppid.tasikmalayakota.go.id/" target="_blank">PPID Utama</a></li>
            <li><a class="dropdown-item" href="{{ url('/ppid') }}">Permohonan Informasi</a></li>
            <li><a class="dropdown-item" href="{{ url('/ppid') }}">Pengajuan Keberatan</a></li>
            <li><a class="dropdown-item" href="{{ url('/ppid') }}">Informasi Berkala</a></li>
            <li><a class="dropdown-item" href="{{ url('/ppid') }}">Informasi Setiap Saat</a></li>
            <li><a class="dropdown-item" href="{{ url('/ppid') }}">Informasi Serta Merta</a></li>
            <li><a class="dropdown-item" href="{{ url('/ppid') }}">Daftar Informasi Publik</a></li>
            <li><a class="dropdown-item" href="{{ url('/ppid') }}">Informasi Dikecualikan</a></li>
            <li><a class="dropdown-item" href="https://ppid.tasikmalayakota.go.id/mekanisme-perolehan-informasi/" target="_blank">Mekanisme Perolehan Informasi</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>