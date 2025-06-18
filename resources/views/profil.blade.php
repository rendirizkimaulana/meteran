@extends('layouts.app')

@section('content')
<div class="container py-5" style="font-family: 'Georgia', serif;">

    <!-- Headline Majalah -->
    <div class="text-center mb-5">
        <h1 class="display-3 fw-bold text-dark">Membuka Pintu Inovasi Energi</h1>
        <p class="text-muted fs-4 fst-italic">Mengupas Visi, Misi, dan Kiprah PT. Citacontrac Bersama PLN</p>
        <hr class="w-25 mx-auto border-3 border-dark">
    </div>

    <!-- Carousel Gambar Auto Slide -->
    <div id="fotoCarousel" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
                <img src="{{ asset('assets/tentang5.jpeg') }}" class="img-fluid rounded-3 mx-auto d-block" style="max-height: 500px;" alt="Foto 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/tentang4.jpg') }}" class="img-fluid rounded-3 mx-auto d-block" style="max-height: 500px;" alt="Foto 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/tentang3.webp') }}" class="img-fluid rounded-3 mx-auto d-block" style="max-height: 500px;" alt="Foto 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#fotoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#fotoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Berikutnya</span>
        </button>
    </div>

    <!-- Artikel 2 Kolom -->
    <div class="row gx-5 mb-5">
        <div class="col-md-6">
            <h2 class="fw-bold text-primary mb-3">Siapa Kami</h2>
            <p class="fs-5 text-justify">
                <strong>PT. Citacontrac</strong> merupakan pionir dalam pelatihan teknis kelistrikan berbasis media digital interaktif. Bermitra resmi dengan PLN, perusahaan ini berkomitmen menyediakan solusi pelatihan modern yang mengedepankan efisiensi, keselamatan, dan keberlanjutan.
            </p>
            <p class="fs-5 text-justify">
                Berdiri dengan semangat profesionalisme dan inovasi, PT. Citacontrac menghadirkan program simulasi pemasangan instalasi listrik yang terintegrasi dengan sistem pembelajaran digital dan pengujian berbasis kuis.
            </p>
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-primary mb-3">Visi & Misi</h2>
            <p class="fs-5"><strong>Visi:</strong> Menjadi pelopor pelatihan teknis kelistrikan digital di Indonesia.</p>
            <p class="fs-5"><strong>Misi:</strong></p>
            <ul class="fs-5">
                <li>Memberikan pelatihan efisien dan aman melalui media digital.</li>
                <li>Meningkatkan kompetensi teknisi kelistrikan nasional.</li>
                <li>Menjalin kemitraan strategis jangka panjang dengan PLN dan lembaga pendidikan.</li>
            </ul>
        </div>
    </div>

    <!-- Kutipan Besar -->
    <div class="bg-light py-5 px-4 rounded-4 mb-5">
        <blockquote class="blockquote text-center">
            <p class="fs-3 fst-italic text-dark">
                "Masa depan energi tidak hanya soal teknologi, tapi juga bagaimana kita mendidik generasi teknisi berikutnya."
            </p>
            <footer class="blockquote-footer fs-5">Direktur Utama PT. Citacontrac</footer>
        </blockquote>
    </div>

    <!-- Legalitas dan Sertifikasi -->
    <div class="mb-5">
        <h2 class="fw-bold text-danger mb-4">Legalitas & Sertifikasi</h2>
        <div class="row gy-4">
            <div class="col-md-4">
                <div class="p-4 bg-white border-start border-5 border-primary shadow-sm h-100">
                    <h5 class="fw-bold">ISO 45001</h5>
                    <p class="mb-0">Standar internasional sistem manajemen keselamatan dan kesehatan kerja.</p>
                    <small class="text-muted">Diterbitkan oleh ISO International</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white border-start border-5 border-success shadow-sm h-100">
                    <h5 class="fw-bold">Sertifikasi K3 Umum</h5>
                    <p class="mb-0">Pelatihan keselamatan kerja resmi dari Kemnaker.</p>
                    <small class="text-muted">Kementerian Ketenagakerjaan</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white border-start border-5 border-warning shadow-sm h-100">
                    <h5 class="fw-bold">IUJPTL</h5>
                    <p class="mb-0">Izin resmi untuk jasa penunjang tenaga listrik.</p>
                    <small class="text-muted">Kementerian ESDM</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Struktur Organisasi -->
    <div class="mb-5">
        <h2 class="fw-bold text-info mb-4">Struktur Organisasi</h2>
        <div class="row align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <img src="{{ asset('assets/struktur.png') }}" alt="Struktur Organisasi" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <p class="fs-5 text-justify">
                    Struktur organisasi PT. Citacontrac dirancang untuk menciptakan alur kerja yang efisien, transparan, dan profesional. Setiap departemen memiliki tanggung jawab yang jelas, mulai dari divisi pelatihan teknis, pengembangan digital, hingga kepatuhan dan pengawasan mutu. Dengan sinergi ini, kami memastikan bahwa setiap proyek dan pelatihan berjalan sesuai standar tertinggi.
                </p>
            </div>
        </div>
    </div>

    <!-- Proses Perizinan -->
    <div class="mb-5">
        <h2 class="fw-bold text-secondary mb-4">Alur Perizinan</h2>
        <div class="row align-items-center flex-md-row-reverse">
            <div class="col-md-6 mb-3 mb-md-0">
                <img src="{{ asset('assets/perizinan.png') }}" alt="Alur Perizinan" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <p class="fs-5 text-justify">
                    PT. Citacontrac telah melalui seluruh proses perizinan resmi untuk menjalankan jasa pelatihan dan jasa penunjang tenaga listrik. Mulai dari pengajuan dokumen, verifikasi teknis, hingga pengesahan dari instansi terkait seperti Kementerian ESDM dan Kemnaker, semua dilakukan secara transparan dan akuntabel demi menjamin legalitas dan kualitas layanan.
                </p>
            </div>
        </div>
    </div>

</div>
@endsection
