@extends('layouts.app')

@section('title', 'Profil Perusahaan')
@section('content')
    <!-- About Section -->
    <section class="py-5 bg-white">
    <div class="container py-3 py-md-5">
            <div class="text-center mb-4 mb-md-5">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 mb-md-3">Profil</span>
                <h2 class="display-5 fw-bold mb-3">Profil Persusahaan</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Kami memiliki berbagai sertifikasi dan lisensi resmi yang menjamin kualitas layanan kami</p>
            </div>
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-4">PT.Citacontrac</h2>
                <p class="lead">PT. Nama Perusahaan Anda adalah perusahaan terdepan di bidang [industri Anda] yang berkomitmen memberikan solusi inovatif dan berkualitas tinggi.</p>
                <p>Didirikan pada tahun [tahun berdiri], kami telah berkembang menjadi mitra tepercaya bagi banyak perusahaan ternama. Dengan pendekatan berbasis teknologi dan tim profesional berpengalaman, kami siap memberikan solusi terbaik untuk kebutuhan bisnis Anda.</p>
            </div>
            <div class="col-lg-6">
                <div class="rounded-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/profil2.jpg') }}" alt="Tentang Perusahaan" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Vision & Mission -->
    <section class="py-5 bg-white">
    <div class="container py-3 py-md-5">
            <div class="text-center mb-4 mb-md-5">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 mb-md-3">Sertifikasi</span>
                <h2 class="display-5 fw-bold mb-3">Visi & Misi</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Kami memiliki berbagai sertifikasi dan lisensi resmi yang menjamin kualitas layanan kami</p>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="bg-white p-4 h-100 rounded-4 border-start border-4 border-primary">
                        <h3 class="fw-bold mb-4">Visi Kami</h3>
                        <p class="fs-5">Menjadi perusahaan terdepan dalam menyediakan solusi [industri Anda] yang inovatif, berkelanjutan, dan berorientasi pada kebutuhan pelanggan.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-white p-4 h-100 rounded-4 border-start border-4 border-success">
                        <h3 class="fw-bold mb-4">Misi Kami</h3>
                        <ul class="fs-5">
                            <li class="mb-2">Menyediakan produk/layanan berkualitas tinggi</li>
                            <li class="mb-2">Mengembangkan solusi berkelanjutan</li>
                            <li class="mb-2">Membangun hubungan jangka panjang dengan klien</li>
                            <li>Berkontribusi positif bagi masyarakat dan lingkungan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Sertifikasi & Lisensi Section -->
    <section class="py-5 bg-white">
        <div class="container py-3 py-md-5">
            <div class="text-center mb-4 mb-md-5">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 mb-md-3">Sertifikasi</span>
                <h2 class="display-5 fw-bold mb-3">Sertifikasi & Lisensi</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Kami memiliki berbagai sertifikasi dan lisensi resmi yang menjamin kualitas layanan kami</p>
            </div>
            
            <div class="row g-3 g-md-4">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="certification-card p-3 p-md-4 h-100 border-0 shadow-sm rounded-3 text-center">
                        <img src="assets/isoicon.png" alt="ISO" class="img-fluid mb-3" style="height: 80px;">
                        <h5 class="fw-bold mb-2">ISO 45001:2018</h5>
                        <p class="text-muted small mb-0">Sistem Manajemen Keselamatan dan Kesehatan Kerja</p>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="certification-card p-3 p-md-4 h-100 border-0 shadow-sm rounded-3 text-center">
                        <img src="assets/sertifikaticon.png" alt="Sertifikasi K3" class="img-fluid mb-3" style="height: 80px;">
                        <h5 class="fw-bold mb-2">Sertifikasi K3 Umum</h5>
                        <p class="text-muted small mb-0">Keselamatan dan Kesehatan Kerja</p>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="certification-card p-3 p-md-4 h-100 border-0 shadow-sm rounded-3 text-center">
                        <img src="assets/izinicon.png" alt="IUJPTL" class="img-fluid mb-3" style="height: 80px;">
                        <h5 class="fw-bold mb-2">IUJPTL</h5>
                        <p class="text-muted small mb-0">Izin Usaha Jasa Penunjang Tenaga Listrik</p>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="certification-card p-3 p-md-4 h-100 border-0 shadow-sm rounded-3 text-center">
                        <img src="assets/plnicon.png" alt="Mitra PLN" class="img-fluid mb-3" style="height: 80px;">
                        <h5 class="fw-bold mb-2">Mitra Resmi PLN</h5>
                        <p class="text-muted small mb-0">Bersertifikasi sebagai mitra instalasi meteran listrik</p>
                    </div>
                </div>
            </div>
        </div>
    

    <!-- Struktur Organisasi Section (Gambar) -->
    <section class="py-5">
        <div class="container py-3 py-md-5">
            <div class="text-center mb-4 mb-md-5">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 mb-md-3">Organisasi</span>
                <h2 class="display-5 fw-bold mb-3">Struktur Organisasi</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Struktur kepengurusan dan manajemen PT. Citacontrac</p>
            </div>
            
            <div class="organization-image text-center">
                <!-- Ganti dengan gambar struktur organisasi Anda -->
                <img src="assets/struktur.png" alt="Struktur Organisasi PT. Citacontrac" class="img-fluid rounded-3 shadow-sm" style="max-height: 600px;">
                <p class="text-muted mt-3"><small>Gambar struktur organisasi perusahaan</small></p>
            </div>
        </div>
    </section>
@endsection