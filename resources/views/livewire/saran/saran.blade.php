<form wire:submit.prevent="submit">
    @csrf

    <label>Nama</label>
    <input type="text" wire:model.defer="nama">
    @error('nama') <span>{{ $message }}</span> @enderror

    <label>Email</label>
    <input type="email" wire:model.defer="email">
    @error('email') <span>{{ $message }}</span> @enderror

    <label>Komentar</label>
    <textarea wire:model.defer="komentar"></textarea>
    @error('komentar') <span>{{ $message }}</span> @enderror

    <label>Captcha</label>
    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
    <input type="hidden" wire:model.defer="captcha" id="captcha">
    @error('captcha') <span>{{ $message }}</span> @enderror

    <button type="submit">Kirim</button>
</form>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    window.onload = function () {
        window.grecaptcha.ready(function () {
            grecaptcha.render('recaptcha-container', {
                sitekey: '{{ env('RECAPTCHA_SITE_KEY') }}',
                callback: function (token) {
                    Livewire.find('@this').set('captcha', token);
                }
            });
        });
    };
</script>
