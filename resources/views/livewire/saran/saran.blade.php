<div>
    <div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-header text-center" style="color: #fff; background-color: #5c768d; ">
          <h5 class="mb-0 fw-bolder">FORM SARAN & ADUAN</h5>
        </div>
        <div class="card-body">
          <form wire:submit.prevent="submit" id="saran-form">
            
            <!-- Nama -->
            <div class="d-flex align-items-center form-row">
              <label for="nama" class="form-label fw-bold form-label-inline mb-0">Nama:</label>
              <input type="text" id="nama" class="form-control form-control-sm" placeholder="Masukkan Nama Kamu" wire:model.defer="nama">
            </div>
            @error('nama') <div class="text-danger small mt-1">{{ $message }}</div> @enderror

            <!-- Email -->
            <div class="d-flex align-items-center form-row">
              <label for="email" class="form-label fw-bold form-label-inline mb-0">Email:</label>
              <input type="email" id="email" class="form-control form-control-sm" placeholder="Masukkan email kamu" wire:model.defer="email">
            </div>
            @error('email') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            <div class="form-text small">Kami tidak akan pernah membagikan email Anda kepada orang lain.</div>


            <!-- No HP -->
            <div class="d-flex align-items-center form-row">
              <label for="no_hp" class="form-label fw-bold form-label-inline mb-0">No HP:</label>
              <input type="text" id="no_hp" class="form-control form-control-sm" placeholder="Masukkan nomor handphone kamu" wire:model.defer="no_hp">
            </div>
            @error('no_hp') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            <div class="form-text small">Kami tidak akan pernah membagikan nomor hp Anda kepada orang lain.</div>

            <!-- Komentar -->
            <div class="d-flex align-items-center form-row">
              <label for="komentar" class="form-label fw-bold form-label-inline mb-0">Komentar:</label>
              <textarea id="komentar" rows="3" class="form-control form-control-sm" placeholder="Masukkan komentar berupa saran atau aduan" wire:model.defer="komentar"></textarea>
            </div>
            @error('komentar') <div class="text-danger small mt-1">{{ $message }}</div> @enderror

            <!-- Captcha -->
            <div class="form-row mt-3">
              <label class="form-label fw-bold d-block">Verifikasi Captcha:</label>
              <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
              @error('captcha') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-custom mt-3">
              <i class="bi bi-send fw-bold"></i> Kirim
            </button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

    {{-- Script Google reCAPTCHA --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        document.addEventListener('livewire:navigated', () => {
            // setiap navigasi/refresh partial Livewire, reset captcha
            if (typeof grecaptcha !== 'undefined') {
                grecaptcha.reset();
            }
        });

        // Intercept submit sebelum Livewire mengirim
        document.addEventListener('submit', function (e) {
            if (e.target && e.target.id === 'saran-form') {
                const token = grecaptcha.getResponse();
                if (!token) {
                    e.preventDefault();
                    alert('Silakan centang captcha dulu!');
                    return false;
                }
                // set captcha token dulu
                Livewire.find(e.target.closest('[wire\\:id]').getAttribute('wire:id'))
                    .set('captcha', token);
            }
        }, true);
    </script>
</div>
