@extends('layout.main')

@section('container')
<div class="hero d-flex align-items-center justify-content-center text-center">
    <div class="overlay w-100 h-100 d-flex flex-column align-items-center justify-content-center">
        <div class="text-container">
            <h1 class="display-3 fw-bold text-dark">TEMPEDIA</h1>
            <p class="lead text-secondary">
                Menggali Lebih Dalam Tentang Tempe<br>
                Makanan Sehat dan Lezat Indonesia
            </p>
        </div>
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
        width: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden; /* Menonaktifkan scroll */
    }

    .container{
    --bs-gutter-x: 0;
    --bs-gutter-y: 0;
    width: 100%;
    padding-right: calc(var(--bs-gutter-x)* .5);
    padding-left: calc(var(--bs-gutter-x)* .5);
    margin-right: 0;
    margin-left: 0;
    }
    
    .hero {
        position: relative;
        width: 100vw;
        height: 100vh;
        background: url('{{ asset('image/homepage-background.png') }}') no-repeat center center;
        background-attachment: fixed;
        background-size: cover;
        
    }
    .text-container {
        background-color: rgba(255, 255, 255, 0.5);
        padding: 35px 70px; 
        border-radius: 20px; 
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); 
        max-width: 600px; 
        text-align: center;
    }

    .overlay {
        background-color: rgba(255, 255, 255, 0.6); /* Transparansi overlay */
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
    .h1{
        margin-top: 5rem;
    }

    .text-secondary{
        color: black !important;
    }
    h1, p {
        margin: 0; /* Hilangkan margin default pada teks */
    }
</style>
@endsection