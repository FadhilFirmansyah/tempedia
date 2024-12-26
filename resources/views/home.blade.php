@extends('layout.main')

@section('container')
<div class="hero d-flex align-items-center justify-content-center text-center">
    <div class="overlay w-100 h-100 d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 fw-bold text-dark">TEMPEDIA</h1>
        <p class="lead text-secondary">
            Menggali Lebih Dalam Tentang Tempe<br>
            Makanan Sehat dan Lezat Indonesia
        </p>
    </div>
</div>

<!-- Inline CSS -->
<style>
    /* Reset untuk memastikan tidak ada margin dan padding tambahan */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden; /* Menonaktifkan scroll */
    }

    .hero {
        position: relative; /* Pastikan elemen mengisi layar penuh */
        top: 0;
        left: 0;
        width: 100vw; /* Lebar penuh layar */
        height: 100vh; /* Tinggi penuh layar */
        background: url('/image/background.jpg') no-repeat center center; /* Ganti dengan path gambar Anda */
        background-size: cover; /* Memastikan gambar memenuhi area */
    }

    .overlay {
        background-color: rgba(255, 255, 255, 0.8); /* Transparansi overlay */
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    h1, p {
        margin: 0; /* Hilangkan margin default pada teks */
    }
</style>
@endsection