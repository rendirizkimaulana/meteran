@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Hero Section -->
    <div class="text-center mb-5 py-5 bg-primary bg-opacity-10 rounded-4">
        <h1 class="fw-bold display-5 text-primary mb-3">
            <i class=""></i>Meteran Listrik Prabayar
        </h1>
        <p class="lead text-muted mb-4">
            Sistem pembayaran listrik praktis dimana pelanggan membeli token terlebih dahulu sebelum menggunakan energi listrik
        </p>
        <div class="d-flex justify-content-center gap-3">
            <a href="#cara-kerja" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
                <i class="bi bi-info-circle me-2"></i>Cara Kerja
            </a>
            <a href="#beli-token" class="btn btn-outline-primary px-4 py-2 rounded-pill">
                <i class="bi bi-credit-card me-2"></i>Beli Token
            </a>
        </div>
    </div>

    <!-- Info Prabayar Section -->
    <div class="row mb-5 align-items-center g-4" id="cara-kerja">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="p-4 p-lg-5 bg-white rounded-4 shadow-sm border border-light">
                <span class="badge bg-primary bg-gradient mb-3">
                    <i class="bi bi-lightbulb-fill me-1"></i>Informasi
                </span>
                <h2 class="fw-bold mb-3">Apa itu Meteran Prabayar?</h2>
                <p class="lead">
                    Sistem meteran listrik dimana pelanggan membeli token/kredit terlebih dahulu sebelum menggunakan listrik.
                </p>
                
                <div class="mt-4">
                    <h5 class="fw-bold mb-3">Keunggulan Sistem Prabayar:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-start">
                            <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3">
                                <i class="bi bi-cash-coin text-primary"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Kontrol Pengeluaran</h6>
                                <p class="small text-muted mb-0">Anda hanya membayar untuk listrik yang digunakan</p>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3">
                                <i class="bi bi-clock-history text-primary"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">24 Jam</h6>
                                <p class="small text-muted mb-0">Beli token kapan saja tanpa antri</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3">
                                <i class="bi bi-speedometer2 text-primary"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Pantau Pemakaian</h6>
                                <p class="small text-muted mb-0">Bisa melihat sisa kWh secara real-time</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ratio ratio-16x9 rounded-4 shadow-lg overflow-hidden border border-2 border-light">
                <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3" alt="Meteran Prabayar" class="object-fit-cover">
                <div class="position-absolute bottom-0 start-0 p-3 bg-dark bg-opacity-50 w-100">
                    <p class="text-white mb-0 small">Contoh meteran listrik prabayar digital</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Cara Kerja Section -->
    <div class="mb-5 py-4 bg-light bg-opacity-25 rounded-4">
        <div class="text-center mb-5">
            <span class="badge bg-success bg-gradient mb-3 px-3 py-2">
                <i class="bi bi-diagram-3-fill me-1"></i>Proses
            </span>
            <h2 class="fw-bold mb-3">Cara Kerja Meteran Prabayar</h2>
            <p class="text-muted">Alur penggunaan sistem listrik prabayar</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <span class="fw-bold text-success fs-2">1</span>
                        </div>
                        <h4 class="card-title fw-bold">Beli Token</h4>
                        <p class="card-text text-muted small">Beli token listrik melalui PLN Mobile, ATM, atau agen terdekat</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <span class="fw-bold text-success fs-2">2</span>
                        </div>
                        <h4 class="card-title fw-bold">Input Token</h4>
                        <p class="card-text text-muted small">Masukkan 20 digit token ke meteran prabayar Anda</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <span class="fw-bold text-success fs-2">3</span>
                        </div>
                        <h4 class="card-title fw-bold">Dapatkan Daya</h4>
                        <p class="card-text text-muted small">Token berhasil diverifikasi, daya listrik akan aktif</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <span class="fw-bold text-success fs-2">4</span>
                        </div>
                        <h4 class="card-title fw-bold">Pantau Saldo</h4>
                        <p class="card-text text-muted small">Cek sisa kWh melalui display meteran</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="mb-5 py-4 bg-light rounded-4">
        <div class="text-center mb-5">
            <span class="badge bg-warning bg-gradient text-dark mb-3 px-3 py-2">
                <i class="bi bi-question-circle-fill me-1"></i>FAQ
            </span>
            <h2 class="fw-bold mb-3">Pertanyaan Umum</h2>
            <p class="text-muted">Beberapa pertanyaan yang sering diajukan</p>
        </div>
        
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm">
                <h2 class="accordion-header">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        Bagaimana cara mengetahui sisa kWh?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Tekan tombol 'Check' atau 'Info' pada meteran prabayar Anda, sisa kWh akan muncul di display meteran.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Apa yang terjadi jika token habis?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Meteran akan otomatis memutus aliran listrik setelah memberikan peringatan. Segera beli token baru untuk mengaktifkan kembali.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item border-0 rounded-3 overflow-hidden shadow-sm">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        Berapa lama masa aktif token?
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Token listrik memiliki masa aktif 90 hari sejak pembelian. Jika tidak digunakan dalam waktu tersebut, token akan kadaluarsa.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Important Note - Lebih menonjol -->
    <div class="alert alert-warning bg-warning bg-opacity-10 border-start border-4 border-warning rounded-4 mt-5">
        <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
                <i class="bi bi-exclamation-triangle-fill text-warning fs-2"></i>
            </div>
            <div class="flex-grow-1 ms-3">
                <h5 class="alert-heading fw-bold">Kebijakan Kami</h5>
                <p class="mb-0">PT Citacontrac selalu mengedepankan pendekatan persuasif dan edukatif kepada pelanggan. Pemutusan sambungan adalah langkah terakhir jika seluruh pendekatan sebelumnya tidak diindahkan.</p>
                <hr>
                <div class="d-flex align-items-center small">
                    <i class="bi bi-info-circle-fill me-2"></i>
                    <span>Hubungi kami untuk informasi lebih lanjut</span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<style>
    .bg-purple {
        background-color: #6f42c1;
    }
    .bg-purple.bg-gradient {
        background-image: linear-gradient(to right, #6f42c1, #8a63d2);
    }
    .text-purple {
        color: #6f42c1;
    }
    .border-purple {
        border-color: #6f42c1 !important;
    }
    .btn-outline-purple {
        color: #6f42c1;
        border-color: #6f42c1;
    }
    .btn-outline-purple:hover {
        color: #fff;
        background-color: #6f42c1;
        border-color: #6f42c1;
    }
    .hover-shadow-lg:hover {
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    }
    .transition-all {
        transition: all 0.3s ease;
    }
</style>
@endsection