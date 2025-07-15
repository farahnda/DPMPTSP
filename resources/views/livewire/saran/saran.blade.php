<div class="container my-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Form Saran & Komentar</h5>
        </div>
        <div class="card-body">
            {{-- Flash Message --}}
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form id="saran-form">
                @csrf

                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" class="form-control" wire:model.defer="nama" placeholder="Masukkan nama lengkap">
                    @error('nama') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" wire:model.defer="email" placeholder="Masukkan email aktif">
                    @error('email') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                </div>

                <!-- No HP -->
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No HP</label>
                    <input type="text" id="no_hp" class="form-control" wire:model.defer="no_hp" placeholder="Masukkan nomor HP">
                    @error('no_hp') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                </div>

                <!-- Komentar -->
                <div class="mb-3">
                    <label for="komentar" class="form-label">Komentar</label>
                    <textarea id="komentar" rows="4" class="form-control" wire:model.defer="komentar" placeholder="Tulis saran atau komentar Anda"></textarea>
                    @error('komentar') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
        <label class="form-label">Verifikasi Captcha</label>
        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
        @error('captcha') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn btn-success">
        <i class="bi bi-send"></i> Kirim
    </button>
</form>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
document.addEventListener('livewire:load', function () {
    const form = document.getElementById('saran-form');

    form.addEventListener('submit', function (e) {
        e.preventDefault(); // cegah form submit default

        // Ambil token dari kotak reCAPTCHA
        const token = grecaptcha.getResponse();

        if (!token) {
            // kalau kotak belum dicentang
            alert('Silakan centang captcha terlebih dahulu!');
            return;
        }

        // Set token ke Livewire property
        @this.set('captcha', token);

        // Panggil method submit di Livewire
        @this.call('submit');
    });
});
</script>