@extends('layouts.app')

@section('content')

{{-- HERO SECTION --}}
<section class="bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInDown">Simulasi Pemasangan Listrik Modern</h1>
        <p class="lead animate__animated animate__fadeInUp animate__delay-1s">
            Edukasi interaktif pemasangan listrik sesuai standar PLN.
        </p>
        <div class="mt-4">
            <a href="#" class="btn btn-warning btn-lg me-2 shadow">Mulai Simulasi</a>
            <a href="#" class="btn btn-outline-light btn-lg shadow">Pelajari Materi</a>
        </div>
    </div>
</section>

{{-- FITUR --}}
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Fitur Menarik</h2>
        <div class="row g-4">
            @php
                $features = [
                    ['icon' => '🧠', 'title' => 'Simulasi Interaktif 3D', 'desc' => 'Instalasi listrik dengan simulasi 3D yang mendalam secara visual.'],
                    ['icon' => '📘', 'title' => 'Materi Komprehensif', 'desc' => 'Lengkap dan sesuai standar PLN, dari konsep hingga praktik.'],
                    ['icon' => '📜', 'title' => 'Sertifikasi Digital', 'desc' => 'Dapatkan sertifikat resmi setelah menyelesaikan simulasi.'],
                    ['icon' => '💬', 'title' => 'Forum Diskusi', 'desc' => 'Diskusi langsung dengan pengguna lain dan tenaga ahli.'],
                    ['icon' => '🔗', 'title' => 'Akses Multi-Perangkat', 'desc' => 'Dapat diakses dari desktop, tablet, dan smartphone.'],
                    ['icon' => '📣', 'title' => 'Update Regulasi Terbaru', 'desc' => 'Sesuai dengan regulasi terbaru dari PLN.'],
                ];
            @endphp

            @foreach($features as $feature)
                <div class="col-md-4">
                    <div class="card h-100 text-center border-0 shadow-sm hover-shadow">
                        <div class="card-body">
                            <div class="display-3">{{ $feature['icon'] }}</div>
                            <h5 class="fw-bold mt-3">{{ $feature['title'] }}</h5>
                            <p class="text-muted">{{ $feature['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- PLN MOBILE --}}
<section class="bg-primary text-white py-5">
    <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between">
        <div class="mb-4 mb-lg-0">
            <h4 class="fw-bold">Terintegrasi dengan PLN Mobile</h4>
            <p>Gunakan aplikasi resmi PLN untuk cek tagihan, layanan pasang baru, dan lainnya langsung dari HP Anda.</p>
            <a href="#" class="btn btn-dark btn-sm me-2">Google Play</a>
            <a href="#" class="btn btn-dark btn-sm">App Store</a>
        </div>
        <img src="https://dummyimage.com/200x300/ffffff/000.png&text=PLN+Mobile" alt="PLN Mobile" class="img-fluid rounded shadow" style="max-height: 300px;">
    </div>
</section>

{{-- CARA PENGGUNAAN --}}
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Cara Menggunakan</h2>
        <div class="row g-4">
            @php
                $steps = [
                    ['title' => 'Daftar Akun', 'desc' => 'Mulai dengan membuat akun pengguna.'],
                    ['title' => 'Pelajari Materi', 'desc' => 'Baca materi simulasi instalasi listrik.'],
                    ['title' => 'Lakukan Simulasi', 'desc' => 'Ikuti simulasi interaktif secara bertahap.'],
                    ['title' => 'Ambil Sertifikat', 'desc' => 'Dapatkan bukti partisipasi digital.'],
                ];
            @endphp

            @foreach($steps as $step)
                <div class="col-md-3">
                    <div class="card text-center border-0 shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="fw-bold">{{ $step['title'] }}</h5>
                            <p class="text-muted">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-5">
            <a href="#" class="btn btn-primary px-4 py-2">Panduan Lengkap</a>
        </div>
    </div>
</section>

{{-- GALERI --}}
<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-2">Galeri Kegiatan</h2>
        <p class="text-center mb-4">Dokumentasi kegiatan pelatihan dan simulasi pemasangan listrik</p>

        <div class="row g-4">
            @php
                $activities = [
                    ['icon' => 'bi-layers', 'color' => 'bg-lightblue', 'title' => 'Workshop Instalasi Listrik', 'desc' => 'Jakarta, 15 Mei 2023'],
                    ['icon' => 'bi-book', 'color' => 'bg-lightyellow', 'title' => 'Seminar Keamanan Listrik', 'desc' => 'Surabaya, 22 Juni 2023'],
                    ['icon' => 'bi-check-circle', 'color' => 'bg-lightgreen', 'title' => 'Sertifikasi Teknisi Listrik', 'desc' => 'Bandung, 10 Juli 2023'],
                    ['icon' => 'bi-people', 'color' => 'bg-lightpink', 'title' => 'Pelatihan Bersama PLN', 'desc' => 'Makassar, 5 Agustus 2023'],
                    ['icon' => 'bi-puzzle', 'color' => 'bg-lightpurple', 'title' => 'Simulasi Virtual Terpadu', 'desc' => 'Medan, 18 September 2023'],
                    ['icon' => 'bi-building', 'color' => 'bg-lightred', 'title' => 'Kunjungan Industri', 'desc' => 'Semarang, 25 Oktober 2023'],
                    ['icon' => 'bi-beaker', 'color' => 'bg-lightblue', 'title' => 'Praktikum Lapangan', 'desc' => 'Yogyakarta, 12 November 2023'],
                    ['icon' => 'bi-briefcase', 'color' => 'bg-lightcyan', 'title' => 'Webinar Kelistrikan', 'desc' => 'Online, 8 Desember 2023'],
                ];
            @endphp

            @foreach($activities as $activity)
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body {{ $activity['color'] }} py-4">
                            <i class="bi {{ $activity['icon'] }} display-5"></i>
                        </div>
                        <div class="card-footer bg-white">
                            <h6 class="fw-bold mb-1">{{ $activity['title'] }}</h6>
                            <p class="mb-0 text-muted small">{{ $activity['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary px-4">Lihat Semua Galeri</a>
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="bg-primary text-white text-center py-5">
    <div class="container">
        <h2 class="fw-bold mb-3">Siap Memulai Simulasi Pemasangan Listrik?</h2>
        <p class="lead mb-4">Tingkatkan pemahaman Anda dalam dunia kelistrikan dengan pengalaman simulasi nyata.</p>
        <a href="#" class="btn btn-warning fw-semibold me-3 px-4 py-2">Mulai Sekarang</a>
        <a href="#" class="btn btn-outline-light fw-semibold px-4 py-2">Pelajari Materi</a>
    </div>
</section>

@endsection