@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Hero Section - Lebih modern dengan gradient -->
    <div class="text-center mb-5 py-5 bg-primary bg-gradient bg-opacity-10 rounded-4 position-relative overflow-hidden">

        <h1 class="fw-bold display-5 text-primary mb-3 position-relative">
            <i class=""></i>Informasi Pencatatan Meteran
        </h1>
        <p class="lead text-muted mb-4 position-relative">
            PT CitaContrac bekerja sama dengan PLN untuk proses pencatatan meteran listrik yang transparan dan efisien
        </p>
        <div class="d-flex justify-content-center gap-3 mt-3 position-relative">
            <a href="#proses" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
                <i class="bi bi-list-ol me-2"></i>Proses Pencatatan
            </a>
            <a href="#manfaat" class="btn btn-outline-primary px-4 py-2 rounded-pill">
                <i class="bi bi-graph-up-arrow me-2"></i>Manfaat
            </a>
        </div>
    </div>

    <!-- Video & Explanation Section - Layout lebih seimbang -->
    <div class="row mb-5 align-items-center g-4">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="ratio ratio-16x9 rounded-4 shadow-lg overflow-hidden border border-2 border-light">
                <video controls poster="https://images.unsplash.com/photo-1581093458791-869b0d1419d1" class="object-fit-cover">
                    <source src="{{ asset('assets/catatmeter.mp4') }}" type="video/mp4">
                    Browser Anda tidak mendukung pemutaran video.
                </video>
                <div class="position-absolute bottom-0 start-0 p-3 bg-dark bg-opacity-50 w-100">
                    <p class="text-white mb-0 small">Video Proses Pencatatan Meteran</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="p-4 p-lg-4 bg-white rounded-4 shadow-sm border border-light">
                <span class="badge bg-primary bg-gradient mb-3 fs-6">
                    <i class="bi bi-info-circle-fill me-1"></i>Pengenalan
                </span>
                <h2 class="fw-bold mb-3 text-gradient text-primary">Apa itu Catat Meteran?</h2>
                <p class="lead mb-4">
                    Proses mencatat angka konsumsi listrik pelanggan secara berkala untuk mengetahui jumlah penggunaan kWh yang akan ditagihkan setiap bulan.
                </p>
                
                <div class="mt-4">
                    <h5 class="fw-bold mb-3">Tujuan Pencatatan:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-start">
                            <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3">
                                <i class="bi bi-check-circle-fill text-primary"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Akurasi Penagihan</h6>
                                <p class="small text-muted mb-0">Menjamin akurasi dalam penagihan listrik</p>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3">
                                <i class="bi bi-check-circle-fill text-primary"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Minim Kesalahan</h6>
                                <p class="small text-muted mb-0">Menghindari kesalahan pencatatan manual</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3">
                                <i class="bi bi-check-circle-fill text-primary"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Edukasi Pelanggan</h6>
                                <p class="small text-muted mb-0">Memberikan pemahaman mengenai konsumsi listrik</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Process Section - Timeline lebih visual -->
    <div class="mb-5 py-5" id="proses">
        <div class="text-center mb-5">
            <span class="badge bg-success bg-gradient mb-3 px-3 py-2 fs-6">
                <i class="bi bi-diagram-3-fill me-1"></i>Tahapan
            </span>
            <h2 class="fw-bold mb-3">Bagaimana Prosesnya?</h2>
            <p class="text-muted">Alur pencatatan meteran listrik yang dilakukan oleh PT CitaContrac</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4 position-relative">
                        <div class="position-absolute top-0 start-0 bg-success text-white px-3 py-1 small fw-bold">
                            Tahap 1
                        </div>
                        
                        <h4 class="card-title fw-bold">Pembacaan Meteran</h4>
                        <p class="card-text text-muted small">Pelanggan melihat angka pada meteran listrik rumah/kantor</p>
                        <div class="mt-3 pt-2 border-top">
                            <span class="badge bg-success bg-opacity-10 text-success small">
                                <i class="bi bi-eye-fill me-1"></i>Observasi
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4 position-relative">
                        <div class="position-absolute top-0 start-0 bg-success text-white px-3 py-1 small fw-bold">
                            Tahap 2
                        </div>
                        
                        <h4 class="card-title fw-bold">Pencatatan Digital</h4>
                        <p class="card-text text-muted small">Pelanggan mencatat angka di platform simulasi PT CitaContrac</p>
                        <div class="mt-3 pt-2 border-top">
                            <span class="badge bg-success bg-opacity-10 text-success small">
                                <i class="bi bi-tablet-fill me-1"></i>Digital
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4 position-relative">
                        <div class="position-absolute top-0 start-0 bg-success text-white px-3 py-1 small fw-bold">
                            Tahap 3
                        </div>
                        
                        <h4 class="card-title fw-bold">Verifikasi Data</h4>
                        <p class="card-text text-muted small">Data diverifikasi untuk analisis dan simulasi pembayaran</p>
                        <div class="mt-3 pt-2 border-top">
                            <span class="badge bg-success bg-opacity-10 text-success small">
                                <i class="bi bi-shield-check me-1"></i>Validasi
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Benefits Section - Warna ungu lebih konsisten -->
    <div class="mb-5 py-5" id="manfaat">
        <div class="text-center mb-5">
            <span class="badge bg-purple bg-gradient mb-3 px-3 py-2 fs-6">
                <i class="bi bi-stars me-1"></i>Keuntungan
            </span>
            <h2 class="fw-bold mb-3">Manfaat bagi Pelanggan</h2>
            <p class="text-muted">Keunggulan sistem pencatatan meteran digital oleh PT CitaContrac</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-purple border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body p-4">
                        
                        <h4 class="card-title fw-bold">Transparansi</h4>
                        <p class="card-text text-muted small">Pelanggan dapat mengetahui dengan jelas angka pemakaian listrik mereka setiap bulan</p>
                        <div class="mt-3">
                            <span class="badge bg-purple bg-opacity-10 text-purple small">
                                <i class="bi bi-check-circle me-1"></i>Jelas
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-purple border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body p-4">
                        
                        <h4 class="card-title fw-bold">Akurasi</h4>
                        <p class="card-text text-muted small">Data meteran tercatat langsung oleh petugas resmi, meminimalkan kesalahan input</p>
                        <div class="mt-3">
                            <span class="badge bg-purple bg-opacity-10 text-purple small">
                                <i class="bi bi-precision me-1"></i>Tepat
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-purple border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body p-4">
                        
                        <h4 class="card-title fw-bold">Efisiensi</h4>
                        <p class="card-text text-muted small">Proses digital mempersingkat waktu dan mengurangi potensi keterlambatan tagihan</p>
                        <div class="mt-3">
                            <span class="badge bg-purple bg-opacity-10 text-purple small">
                                <i class="bi bi-speedometer2 me-1"></i>Cepat
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            
        <div class="text-center mt-5">
            <div class="bg-light p-4 p-lg-5 rounded-4 border border-light shadow-sm">
                <p class="lead mb-0 fst-italic">
                    "Dengan dukungan teknologi dan pelibatan profesional seperti PT CitaContrac, PLN dapat meningkatkan kualitas layanan publik dalam pengelolaan energi listrik yang adil dan transparan."
                </p>
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
    .text-gradient {
        background: linear-gradient(to right, #0d6efd, #6f42c1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .hover-shadow-lg:hover {
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    }
    .transition-all {
        transition: all 0.3s ease;
    }
</style>


@endsection