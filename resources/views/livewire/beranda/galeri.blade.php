<h2>Semua Foto Galeri</h2>
@foreach ($galeris as $galeri)
    <img src="{{ $galeri->image }}" width="100">
@endforeach