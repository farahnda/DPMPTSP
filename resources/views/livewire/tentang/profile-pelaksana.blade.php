<div>
    <div class="container mt-4">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <div class="section-title">Profile Pelaksana</div>
            </div>
            <div class="row g-4 justify-content-center">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="col-12">
                        <div class="mx-auto">
                            <img src="{{ asset('image/p-' . $i . '.jpg') }}" alt="Profile {{ $i }}"
                                 class="img-fluid rounded shadow-sm mb-3 w-100 w-md-65 w-lg-20">
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>