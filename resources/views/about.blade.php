@extends('layout.main')

@section('container')
<div class="container text-center mt-4">
    <h2 class="mb-4">Tentang Produsen</h2>
    <div class="card mx-auto" style="width: 24rem;">
        <div class="card-body text-center">
            <img src="/image/profile.jpeg" alt="Ngadinu" class="rounded-circle mb-3" width="150">
            <h5 class="card-title">Ngadinu</h5>
            <p class="card-text"><strong>Alamat:</strong> Jl. Mustokoweni Tengah, Semarang Utara</p>
            <p class="card-text"><strong>Tahun Usaha:</strong> 1999</p>
            <p class="card-text"><strong>Email:</strong> tempengadinu@mail.com</p>
            <a target="_blank" href="https://wa.me/085311239801" class="btn btn-success">
                <i class="bi bi-whatsapp"></i> 085311239801
            </a>
        </div>
    </div>
    <div class="mt-5">
        <h4>Sejarah singkat berdirinya Usaha</h4>
        <p>Pak Ngadinu memulai usaha sejak tahun 1999-an, mulai dari reseller tempe hingga sekarang bisa membuat tempe sendiri di rumahnya,
            Pak Ngadinu berhasil menjadi seorang penjual tempe yang dikenal di kampungnya, banyak pasar dan warung makan menjadikan tempe Pak Ngadinu langganan mereka. </p>
    </div>
</div>
<style>
    .mt-5{
        margin-top: 1.5rem !important;
    }
</style>

@endsection
