@extends('layout.main')

@section('container')
<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Mitra</h2>
    <div class="row">
        @foreach ($mitras as $mitra)
        <div class="col-md-12 mb-3">
            <div class="card shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <!-- Gambar Mitra -->
                    <div class="me-3">
                        <img src="{{ $mitra->image ? asset($mitra->image) : 'https://picsum.photos/500/400' }}" alt="{{ $mitra->mitra }}" class="rounded" style="width: 80px; height: 80px; object-fit: cover;">
                    </div>
                    <!-- Informasi Mitra -->
                    <div class="flex-grow-1">
                        <h5 class="mb-1">Nama: {{ $mitra->nama }}</h5>
                        <p class="mb-0 text-muted">Alamat: {{ $mitra->alamat }}</p>
                    </div>
                    <!-- Tombol Detail -->
                    <div>
                        <a href="/mitra/{{ $mitra->slug }}" class="btn btn-outline-secondary">Detail Mitra</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
