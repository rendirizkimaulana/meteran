@extends('layouts.app')

@section('title', 'Halaman Beranda')

@section('content')
    <!-- Hero Section - Modern Design -->
    <section class="hero-section bg-gradient-primary">
        <div class="container py-3 py-md-5">
            <div class="row align-items-center py-3 py-md-5">
                <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                    <h1 class="hero-title display-4 fw-bold mb-3">Simulasi Instalasi Meteran Listrik Profesional</h1>
                    <p class="hero-subtitle lead mb-4">Platform pelatihan interaktif untuk memahami instalasi meteran listrik sesuai standar PLN</p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                        <a href="{{ url('/simulasi') }}" class="btn btn-light btn-lg px-3 px-md-4 py-2 py-md-3 shadow-sm">
                            <i class="bi bi-play-circle me-2"></i> Mulai Simulasi
                        </a>
                        <a href="{{ url('/materi') }}" class="btn btn-outline-light btn-lg px-3 px-md-4 py-2 py-md-3">
                            <i class="bi bi-book me-2"></i> Pelajari Materi
                        </a>
                    </div>
                    
                    <div class="d-flex flex-column flex-md-row align-items-center gap-3 gap-md-4 mt-4 mt-md-5 justify-content-center justify-content-lg-start">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <img src="assets/plnicon.png" alt="Trusted" class="img-fluid" style="width: 40px;">
                            </div>
                            <div>
                                <div class="fw-bold">100%</div>
                                <small class="text-white-50">Standar PLN</small>
                            </div>
                        </div>
                        <div class="vr text-white-50 d-none d-md-block"></div>
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <div class="d-flex gap-2">
                                    <img src="assets/isoicon.png" alt="Certified" class="img-fluid" style="width: 40px;">
                                    <img src="assets/sertifikaticon.png" alt="Certified" class="img-fluid" style="width: 40px;">
                                    <img src="assets/izinicon.png" alt="Certified" class="img-fluid" style="width: 40px;">
                                </div>
                            </div>
                            <div>
                                <div class="fw-bold">Perusahaan Bersertifikasi</div>
                                <div class="d-flex flex-wrap gap-1">
                                    <small class="text-white-50">ISO 45001</small>
                                    <small class="text-white-50 d-none d-sm-inline">|</small>
                                    <small class="text-white-50">K3 UMUM</small>
                                    <small class="text-white-50 d-none d-sm-inline">|</small>
                                    <small class="text-white-50">IUJPTL</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 mt-4 mt-lg-0">
                    <img src="assets/iklan4.png" alt="ICONNET App" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section - Card Design -->
    <section class="py-5">
        <div class="container py-3 py-md-5">
            <div class="text-center mb-4 mb-md-5">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 mb-md-3">Keunggulan Kami</span>
                <h2 class="display-5 fw-bold mb-3">Platform Pelatihan Terbaik</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Solusi lengkap untuk pelatihan instalasi meteran listrik dengan pendekatan modern dan interaktif</p>
            </div>
            
            <div class="row g-3 g-md-4">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="feature-card p-3 p-md-4 h-100 border-0 shadow-sm rounded-3">
                        <div class="card-icon bg-primary bg-opacity-10 text-primary rounded-circle p-2 p-md-3 mb-3 mb-md-4" style="width: 50px; height: 50px;">
                            <i class="bi bi-laptop fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-2 mb-md-3">Simulasi Interaktif</h5>
                        <p class="text-muted mb-0">Praktik instalasi meteran listrik secara virtual dengan panduan step-by-step dan umpan balik langsung.</p>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="feature-card p-3 p-md-4 h-100 border-0 shadow-sm rounded-3">
                        <div class="card-icon bg-primary bg-opacity-10 text-primary rounded-circle p-2 p-md-3 mb-3 mb-md-4" style="width: 50px; height: 50px;">
                            <i class="bi bi-book fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-2 mb-md-3">Materi Lengkap</h5>
                        <p class="text-muted mb-0">Kurikulum komprehensif sesuai standar PLN dan peraturan terbaru, diperbarui secara berkala.</p>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="feature-card p-3 p-md-4 h-100 border-0 shadow-sm rounded-3">
                        <div class="card-icon bg-primary bg-opacity-10 text-primary rounded-circle p-2 p-md-3 mb-3 mb-md-4" style="width: 50px; height: 50px;">
                            <i class="bi bi-graph-up fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-2 mb-md-3">Evaluasi Real-time</h5>
                        <p class="text-muted mb-0">Sistem penilaian otomatis dengan feedback instan untuk membantu Anda meningkatkan keterampilan.</p>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="feature-card p-3 p-md-4 h-100 border-0 shadow-sm rounded-3">
                        <div class="card-icon bg-primary bg-opacity-10 text-primary rounded-circle p-2 p-md-3 mb-3 mb-md-4" style="width: 50px; height: 50px;">
                            <i class="bi bi-phone fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-2 mb-md-3">Akses Mobile</h5>
                        <p class="text-muted mb-0">Belajar kapan saja, di mana saja melalui perangkat mobile dengan pengalaman yang optimal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-5 bg-light">
        <div class="container py-3 py-md-5">
            <div class="text-center mb-4 mb-md-5">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 mb-md-3">Proses Belajar</span>
                <h2 class="display-5 fw-bold mb-3">Cara Kerja Platform Kami</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Pelatihan efektif dalam 4 langkah mudah</p>
            </div>
            
            <div class="row g-3 g-md-4">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="step-card text-center p-3 p-md-4 position-relative">
                        <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-2 mb-md-3" style="width: 40px; height: 40px;">1</div>
                        <h5 class="fw-bold mb-2 mb-md-3">Daftar Akun</h5>
                        <p class="text-muted mb-0">Buat akun secara gratis dan lengkapi profil Anda</p>
                        <div class="step-arrow d-none d-lg-block">
                            <i class="bi bi-arrow-right text-muted"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="step-card text-center p-3 p-md-4 position-relative">
                        <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-2 mb-md-3" style="width: 40px; height: 40px;">2</div>
                        <h5 class="fw-bold mb-2 mb-md-3">Pelajari Materi</h5>
                        <p class="text-muted mb-0">Akses modul pembelajaran sesuai kebutuhan</p>
                        <div class="step-arrow d-none d-lg-block">
                            <i class="bi bi-arrow-right text-muted"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="step-card text-center p-3 p-md-4 position-relative">
                        <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-2 mb-md-3" style="width: 40px; height: 40px;">3</div>
                        <h5 class="fw-bold mb-2 mb-md-3">Ikuti Simulasi</h5>
                        <p class="text-muted mb-0">Praktik langsung dengan simulasi interaktif</p>
                        <div class="step-arrow d-none d-lg-block">
                            <i class="bi bi-arrow-right text-muted"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="step-card text-center p-3 p-md-4">
                        <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-2 mb-md-3" style="width: 40px; height: 40px;">4</div>
                        <h5 class="fw-bold mb-2 mb-md-3">Dapatkan Sertifikat</h5>
                        <p class="text-muted mb-0">Dapatkan sertifikat setelah menyelesaikan pelatihan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section - Modern Design -->
    <section class="py-5" id="about">
        <div class="container py-3 py-md-5">
            <div class="row align-items-center g-4 g-md-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="position-relative rounded-4 overflow-hidden">
                        <img src="assets/logopt2.jpg" alt="Tentang Perusahaan" class="img-fluid w-100">
                        <div class="position-absolute bottom-0 start-0 p-3 p-md-4 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.7)); width: 100%;">
                            <h4 class="fw-bold mb-0">Sejak 2010</h4>
                            <p class="mb-0">Mengembangkan solusi pelatihan terbaik</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <span class="badge bg-primary bg-opacity-10 text-primary mb-2 mb-md-3">Tentang Kami</span>
                    <h2 class="display-5 fw-bold mb-3 mb-md-4">Penyedia Solusi Pelatihan Instalasi Meteran Listrik Terkemuka</h2>
                    <p class="lead text-muted mb-3 mb-md-4">Kami berkomitmen untuk meningkatkan kompetensi teknisi listrik di Indonesia melalui pelatihan berkualitas.</p>
                    
                    <div class="mb-3 mb-md-4">
                        <div class="d-flex align-items-start mb-2 mb-md-3">
                            <div class="me-2 me-md-3">
                                <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-2">
                                    <i class="bi bi-eye-fill fs-5"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="fw-bold mb-1 mb-md-2">Visi</h4>
                                <p class="mb-0">Menjadi platform pelatihan instalasi meteran listrik terdepan yang mendukung profesionalisme teknisi listrik di Indonesia.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3 mb-md-4">
                        <div class="d-flex align-items-start mb-2 mb-md-3">
                            <div class="me-2 me-md-3">
                                <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-2">
                                    <i class="bi bi-bullseye fs-5"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="fw-bold mb-1 mb-md-2">Misi</h4>
                                <ul class="mb-0 ps-3">
                                    <li>Menyediakan pelatihan berkualitas sesuai standar PLN</li>
                                    <li>Mengembangkan teknologi simulasi interaktif</li>
                                    <li>Meningkatkan kompetensi teknisi listrik nasional</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-2 g-md-3 mt-3 mt-md-4">
                        <div class="col-6 col-sm-4">
                            <div class="p-2 p-md-3 border rounded-3 text-center">
                                <div class="display-8 fw-bold text-primary mb-1">5000+</div>
                                <div class="text-muted small">Tenaga Kerja</div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="p-2 p-md-3 border rounded-3 text-center">
                                <div class="display-8 fw-bold text-primary mb-1">Mitra PLN</div>
                                <div class="text-muted small">Resmi</div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="p-2 p-md-3 border rounded-3 text-center">
                                <div class="display-8 fw-bold text-primary mb-1">Bersertifikasi</div>
                                <div class="text-muted small">Standart PLN</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section - Modern Carousel -->
    <section class="py-5 bg-light">
        <div class="container py-3 py-md-5">
            <div class="text-center mb-4 mb-md-5">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 mb-md-3">Galeri Kami</span>
                <h2 class="display-5 fw-bold mb-3">Momen Kegiatan</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Dokumentasi beberapa kegiatan yang dilakukan PT.Citacontrac di lapangan & di kantor.</p>
            </div>

            <div class="gallery-carousel">
                <div class="row g-2 g-md-3">
                    <div class="col-12 col-md-4">
                        <a href="#" class="gallery-item d-block overflow-hidden rounded-3 shadow-sm">
                            <img src="assets/hero.jpeg" alt="Pelatihan" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                            <div class="gallery-caption p-2 p-md-3 bg-white">
                                <h5 class="fw-bold mb-1">Instalasi Meteran</h5>
                                <small class="text-muted">Jakarta, 2025</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="#" class="gallery-item d-block overflow-hidden rounded-3 shadow-sm">
                            <img src="assets/catat.jpeg" alt="Seminar" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                            <div class="gallery-caption p-2 p-md-3 bg-white">
                                <h5 class="fw-bold mb-1">Catat Meter P2TL</h5>
                                <small class="text-muted">Jakarta, 2025</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="#" class="gallery-item d-block overflow-hidden rounded-3 shadow-sm">
                            <img src="assets/input.jpg" alt="VR Training" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                            <div class="gallery-caption p-2 p-md-3 bg-white">
                                <h5 class="fw-bold mb-1">Input data laporan Meteran</h5>
                                <small class="text-muted">Jakarta, 2025</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- App Showcase Section - PLN Mobile -->
    <section class="py-5 bg-light">
        <div class="container py-3 py-md-5">
            <div class="text-center mb-4 mb-md-5">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 mb-md-3">Aplikasi</span>
                <h2 class="display-5 fw-bold mb-3">Happy Pakai Aplikasi PLN!</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">🔥 Listrik lancar, hidup makin terang! 🔥</p>
            </div>
            
    <section class="py-5" id="pln-mobile">
        <div class="container py-3 py-md-5">
            <div class="row align-items-center g-4 g-md-5">
                <div class="col-lg-6">
                    <div class="pe-lg-3 pe-lg-md-5">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2 mb-md-3">Aplikasi PLN</span>
                        <h2 class="display-5 fw-bold mb-3 mb-md-4">Gunakan <span class="text-primary">PLN Mobile</span></h2>
                        <p class="lead text-muted mb-3 mb-md-4">Aplikasi resmi PLN untuk memantau dan membayar tagihan listrik dengan mudah dan cepat</p>
                        
                        <div class="feature-list mb-4 mb-md-5">
                            <div class="d-flex align-items-start mb-3 mb-md-4">
                                <div class="me-2 me-md-3">
                                    <div class="icon-circle bg-primary bg-opacity-10 text-primary rounded-circle p-2">
                                        <i class="bi bi-lightning-charge-fill fs-5"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1 mb-md-2">Pantau Tagihan Real-time</h5>
                                    <p class="text-muted mb-0">Cek konsumsi listrik dan status tagihan kapan saja secara real-time</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start mb-3 mb-md-4">
                                <div class="me-2 me-md-3">
                                    <div class="icon-circle bg-primary bg-opacity-10 text-primary rounded-circle p-2">
                                        <i class="bi bi-wallet-fill fs-5"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1 mb-md-2">Pembayaran Mudah</h5>
                                    <p class="text-muted mb-0">Bayar tagihan langsung melalui aplikasi dengan berbagai metode pembayaran</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start">
                                <div class="me-2 me-md-3">
                                    <div class="icon-circle bg-primary bg-opacity-10 text-primary rounded-circle p-2">
                                        <i class="bi bi-bell-fill fs-5"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1 mb-md-2">Notifikasi Jatuh Tempo</h5>
                                    <p class="text-muted mb-0">Dapatkan pemberitahuan sebelum tagihan jatuh tempo</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- App Download Buttons with Official Links -->
                        <div class="app-download-buttons mb-3 mb-md-4">
                            <h5 class="fw-bold mb-2 mb-md-3">Download Aplikasi:</h5>
                            <div class="d-flex flex-wrap gap-2 gap-md-3">
                                <a href="https://play.google.com/store/apps/details?id=com.icon.pln123" target="_blank" class="btn btn-dark btn-lg px-3 px-md-4 py-2">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-google-play fs-4 me-1 me-md-2"></i>
                                        <div>
                                            <small class="d-block">Get it on</small>
                                            <span class="fw-bold">Google Play</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="https://apps.apple.com/id/app/pln-mobile/id1502493371" target="_blank" class="btn btn-dark btn-lg px-3 px-md-4 py-2">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-apple fs-4 me-1 me-md-2"></i>
                                        <div>
                                            <small class="d-block">Download on the</small>
                                            <span class="fw-bold">App Store</span>
                                        </div>
                                    </div>
                                </a>
                            </div>                      
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="position-relative mt-4 mt-lg-0">
                        <img src="assets/iklan3.png" alt="PLN Mobile App" style="width: 100%; max-width: 400px; display: block; margin-left: auto;">
                        <div class="position-absolute bottom-0 start-0 translate-middle d-none d-lg-block">
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- App Showcase Section - ICONNET (Internet Service) -->
    <section class="py-5">
        <div class="container py-3 py-md-5">
            <div class="row align-items-center g-4 g-md-5">
                <div class="col-lg-6 order-lg-2">
                    <div class="ps-lg-3 ps-lg-md-5">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2 mb-md-3">Layanan Internet PLN</span>
                        <h2 class="display-5 fw-bold mb-3 mb-md-4">Internet Cepat & Stabil dengan <span class="text-primary">ICONNET</span></h2>
                        <p class="lead text-muted mb-3 mb-md-4">Layanan WiFi fiber optik dari PLN Icon Plus untuk rumah dan bisnis</p>
                        
                        <div class="feature-list mb-4 mb-md-5">
                            <div class="d-flex align-items-start mb-3 mb-md-4">
                                <div class="me-2 me-md-3">
                                    <div class="icon-circle bg-primary bg-opacity-10 text-primary rounded-circle p-2">
                                        <i class="bi bi-lightning-charge fs-5"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1 mb-md-2">Jaringan Fiber Optik</h5>
                                    <p class="text-muted mb-0">Kecepatan hingga 100Mbps dengan koneksi stabil</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start mb-3 mb-md-4">
                                <div class="me-2 me-md-3">
                                    <div class="icon-circle bg-primary bg-opacity-10 text-primary rounded-circle p-2">
                                        <i class="bi bi-wifi fs-5"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1 mb-md-2">Jangkauan Luas</h5>
                                    <p class="text-muted mb-0">Terutama di daerah 3T (Terdepan, Terluar, Tertinggal)</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start">
                                <div class="me-2 me-md-3">
                                    <div class="icon-circle bg-primary bg-opacity-10 text-primary rounded-circle p-2">
                                        <i class="bi bi-cash-coin fs-5"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1 mb-md-2">Harga Kompetitif</h5>
                                    <p class="text-muted mb-0">Paket mulai dari Rp 200.000/bulan dengan kuota besar</p>
                                </div>
                            </div>
                        </div>

                        <!-- App Download Buttons -->
                        <div class="app-download-buttons mb-3 mb-md-4">
                            <h5 class="fw-bold mb-2 mb-md-3">Download Aplikasi:</h5>
                            <div class="d-flex flex-wrap gap-2 gap-md-3">
                                <a href="https://play.google.com/store/apps/details?id=id.co.iconpln.icrm.customer" target="_blank" class="btn btn-dark btn-lg px-3 px-md-4 py-2">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-google-play fs-4 me-1 me-md-2"></i>
                                        <div>
                                            <small class="d-block">Get it on</small>
                                            <span class="fw-bold">Google Play</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="https://apps.apple.com/id/app/iconnet/id1585527689" target="_blank" class="btn btn-dark btn-lg px-3 px-md-4 py-2">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-apple fs-4 me-1 me-md-2"></i>
                                        <div>
                                            <small class="d-block">Download on the</small>
                                            <span class="fw-bold">App Store</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="additional-features mb-3 mb-md-4">
                            <h5 class="fw-bold mb-2 mb-md-3">Keunggulan Lainnya:</h5>
                            <div class="d-flex flex-wrap gap-1 gap-md-2">
                                <span class="badge bg-primary bg-opacity-10 text-primary py-1 py-md-2 px-2 px-md-3">
                                    <i class="bi bi-check-circle me-1"></i> Free Installation
                                </span>
                                <span class="badge bg-primary bg-opacity-10 text-primary py-1 py-md-2 px-2 px-md-3">
                                    <i class="bi bi-check-circle me-1"></i> 24/7 Support
                                </span>
                                <span class="badge bg-primary bg-opacity-10 text-primary py-1 py-md-2 px-2 px-md-3">
                                    <i class="bi bi-check-circle me-1"></i> Bundling Listrik
                                </span>
                            </div>
                        </div>                
                    </div>
                </div>
                
                <div class="col-lg-6 order-lg-1">
                    <div class="position-relative">
                        <img src="assets/iklan2.png" alt="ICONNET App" class="img-fluid">
                        <div class="position-absolute top-0 end-0 translate-middle d-none d-lg-block">
                            <div class="card shadow border-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        // Animation for elements when they come into view
        document.addEventListener('DOMContentLoaded', function() {
            const animateOnScroll = function() {
                const elements = document.querySelectorAll('.feature-card, .testimonial-card, .gallery-item');
                
                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementPosition < windowHeight - 100) {
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }
                });
            };
            
            // Set initial state
            const animatedElements = document.querySelectorAll('.feature-card, .testimonial-card, .gallery-item');
            animatedElements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            });
            
            // Run on load and scroll
            animateOnScroll();
            window.addEventListener('scroll', animateOnScroll);
        });
    </script>
    @endpush
@endsection