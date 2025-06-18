@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold display-5">Layanan Bisnis - P2TL</h1>
        <p class="lead text-muted">Mendukung PLN dalam Penertiban Pemakaian Tenaga Listrik</p>
    </div>

    <!-- Gambar & Penjelasan -->
<div class="row mb-4">
    <div class="col-md-6">
        <div class="ratio ratio-16x9 rounded shadow">
            <video controls poster="https://images.unsplash.com/photo-1581093458791-869b0d1419d1">
                <source src="{{ asset('assets/P2TL.mp4') }}" type="video/mp4">
                Browser Anda tidak mendukung pemutaran video.
            </video>
        </div>
    </div>
        <div class="col-md-6">
            <h3 class="fw-bold text-primary">Apa itu P2TL?</h3>
            <p>
                <strong>Penertiban Pemakaian Tenaga Listrik (P2TL)</strong> adalah kegiatan pengawasan dan tindakan oleh PLN terhadap pelanggan yang menggunakan listrik tidak sesuai ketentuan.
                Tujuannya untuk mengurangi kerugian energi, mencegah praktik ilegal, dan menjaga keandalan sistem tenaga listrik nasional.
            </p>
        </div>
    </div>

    <!-- Jenis Pelanggaran -->
    <div class="mb-5">
        <h4 class="fw-bold">Jenis-Jenis Pelanggaran</h4>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">🔌 Pemakaian langsung tanpa kWh meter (colok langsung)</li>
                    <li class="list-group-item">🔧 KWh meter dimodifikasi atau dirusak</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">🔁 Pembalikan fase pada instalasi</li>
                    <li class="list-group-item">📉 Pengurangan beban tercatat secara ilegal</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Prosedur -->
    <div class="mb-5">
        <h4 class="fw-bold">Prosedur P2TL</h4>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item">Tim P2TL melakukan pemeriksaan lapangan.</li>
            <li class="list-group-item">Jika ditemukan pelanggaran, dibuatkan Berita Acara Pemeriksaan (BAP).</li>
            <li class="list-group-item">PLN memberikan sanksi atau penyesuaian tagihan sesuai pelanggaran.</li>
            <li class="list-group-item">Pelanggan wajib melunasi biaya sesuai BAP.</li>
        </ol>
    </div>

    <!-- Peran Citacontrac -->
    <div class="mb-5">
        <h4 class="fw-bold">Peran PT. Citacontrac</h4>
        <p>
            Sebagai mitra resmi PLN, <strong>PT. Citacontrac</strong> berperan aktif dalam pelaksanaan P2TL dengan:
        </p>
        <ul>
            <li>Menyediakan sistem digital untuk pencatatan dan pelaporan.</li>
            <li>Mengembangkan simulator pelatihan P2TL berbasis web.</li>
            <li>Menyuplai tenaga ahli dan teknisi bersertifikat.</li>
        </ul>
    </div>

@endsection
