@foreach ($galeris as $item)
    <img src="{{ $item->gambar }}" alt="{{ $item->judul }}" width="200">
@endforeach
