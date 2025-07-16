<div>
  <div class="container py-5">
      <div class="row justify-content-center text-center mb-5">
            <div class="col-12 mb-4">
                <div class="section-title">Regulasi</div>
            </div>
        </div>    <div class="row g-4">
      @foreach($regulasis as $regulasi)
      <div class="col-md-4">
        <div class="d-flex flex-column h-100 border rounded p-3">
          {{-- PDF Preview --}}
          <iframe class="pdf-frame mb-3" src="{{ $regulasi['pdf'] }}"></iframe>
    
          {{-- Judul --}}
          <div class="text-center flex-grow-1 d-flex align-items-center justify-content-center">
            <h6 class="mb-0">{{ $regulasi['title'] }}</h6>
          </div> <hr>
    
          {{-- Tombol --}}
          <div class="mt-3 text-end">
            <a href="{{ $regulasi['pdf'] }}" target="_blank" class="btn-custom text-center">Lihat</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
