@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Hero Section -->
    <div class="text-center mb-5 py-5 bg-primary bg-opacity-10 rounded-4">
        <h1 class="fw-bold display-5 text-primary mb-3">
            <i class=""></i>Meteran Listrik Pascabayar
        </h1>
        <p class="lead text-muted mb-4">
            Sistem pembayaran listrik dimana pelanggan menggunakan listrik terlebih dahulu kemudian membayar tagihan setiap bulan
        </p>
        <div class="d-flex justify-content-center gap-3">
            <a href="#cara-kerja" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
                <i class="bi bi-info-circle me-2"></i>Cara Kerja
            </a>
            <a href="#pembayaran" class="btn btn-outline-primary px-4 py-2 rounded-pill">
                <i class="bi bi-credit-card me-2"></i>Pembayaran
            </a>
        </div>
    </div>

    <!-- Info Pascabayar Section -->
    <div class="row mb-5 align-items-center g-4" id="cara-kerja">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="p-4 p-lg-5 bg-white rounded-4 shadow-sm border border-light">
                <span class="badge bg-primary bg-gradient mb-3">
                    <i class="bi bi-lightbulb-fill me-1"></i>Informasi
                </span>
                <h2 class="fw-bold mb-3">Apa itu Meteran Pascabayar?</h2>
                <p class="lead">
                    Sistem meteran listrik dimana pelanggan menggunakan listrik terlebih dahulu kemudian membayar tagihan bulanan sesuai pemakaian.
                </p>
                
                <div class="mt-4">
                    <h5 class="fw-bold mb-3">Karakteristik Sistem Pascabayar:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-start">
                            <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3">
                                <i class="bi bi-calendar-month text-primary"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Pembayaran Bulanan</h6>
                                <p class="small text-muted mb-0">Tagihan dibayar setelah pemakaian (setiap bulan)</p>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3">
                                <i class="bi bi-cash-stack text-primary"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Tanpa Token</h6>
                                <p class="small text-muted mb-0">Tidak perlu membeli token/listrik tidak akan mati otomatis</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3">
                                <i class="bi bi-file-text text-primary"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Tagihan Rutin</h6>
                                <p class="small text-muted mb-0">Menerima tagihan bulanan melalui email/SMS</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ratio ratio-16x9 rounded-4 shadow-lg overflow-hidden border border-2 border-light">
                <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3" alt="Meteran Pascabayar" class="object-fit-cover">
                <div class="position-absolute bottom-0 start-0 p-3 bg-dark bg-opacity-50 w-100">
                    <p class="text-white mb-0 small">Contoh meteran listrik pascabayar digital</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Proses Pencatatan Section -->
    <div class="mb-5 py-4 bg-light bg-opacity-25 rounded-4">
        <div class="text-center mb-5">
            <span class="badge bg-success bg-gradient mb-3 px-3 py-2">
                <i class="bi bi-clipboard-data-fill me-1"></i>Proses
            </span>
            <h2 class="fw-bold mb-3">Proses Pencatatan Meteran</h2>
            <p class="text-muted">Bagaimana pemakaian listrik dicatat dan ditagihkan</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <span class="fw-bold text-success fs-2">1</span>
                        </div>
                        <h4 class="card-title fw-bold">Pemakaian Listrik</h4>
                        <p class="card-text text-muted small">Pelanggan menggunakan listrik seperti biasa setiap hari</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <span class="fw-bold text-success fs-2">2</span>
                        </div>
                        <h4 class="card-title fw-bold">Pencatatan Meteran</h4>
                        <p class="card-text text-muted small">Petugas PLN mencatat angka meteran setiap bulan</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <span class="fw-bold text-success fs-2">3</span>
                        </div>
                        <h4 class="card-title fw-bold">Penerbitan Tagihan</h4>
                        <p class="card-text text-muted small">PLN menghitung tagihan berdasarkan selisih meteran</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <span class="fw-bold text-success fs-2">4</span>
                        </div>
                        <h4 class="card-title fw-bold">Pembayaran</h4>
                        <p class="card-text text-muted small">Pelanggan membayar tagihan sebelum jatuh tempo</p>
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
                        Kapan biasanya tagihan diterima?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Tagihan biasanya dikirimkan sekitar tanggal 5 setiap bulan melalui SMS/email atau dapat dicek di aplikasi PLN Mobile.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Apa yang terjadi jika terlambat bayar?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Jika terlambat membayar, akan dikenakan denda keterlambatan dan setelah melewati batas waktu tertentu, listrik dapat diputus sementara.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item border-0 rounded-3 overflow-hidden shadow-sm">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        Bagaimana cara membaca meteran pascabayar?
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Angka meteran menunjukkan total kWh yang telah digunakan. Selisih antara pembacaan bulan ini dan bulan sebelumnya adalah pemakaian yang akan ditagihkan.
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