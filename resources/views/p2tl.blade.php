@extends('layouts.app')

@section('title', 'Halaman P2TL')
@section('content')
<div class="container my-5">
    <!-- Hero Section - Dipercantik dengan gradient dan animasi -->
    <div class="text-center mb-5 py-5 bg-primary bg-gradient bg-opacity-10 rounded-4 shadow-sm">
        <h1 class="fw-bold display-5 text-primary mb-3 animate__animated animate__fadeInDown">
            <i class="bi bi-lightning-charge-fill me-2"></i> Layanan Bisnis - P2TL
        </h1>
        <p class="lead text-muted mb-4 animate__animated animate__fadeIn animate__delay-1s">
            Mendukung PLN dalam Penertiban Pemakaian Tenaga Listrik
        </p>
        <div class="d-flex justify-content-center gap-3 mt-3 animate__animated animate__fadeIn animate__delay-1s">
            <a href="#pelanggaran" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>Jenis Pelanggaran
            </a>
            <a href="#prosedur" class="btn btn-outline-primary px-4 py-2 rounded-pill">
                <i class="bi bi-list-check me-2"></i>Prosedur
            </a>
        </div>
    </div>

    <!-- Video & Explanation Section - Layout lebih seimbang -->
    <div class="row mb-5 align-items-center g-4">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="ratio ratio-16x9 rounded-4 shadow-lg overflow-hidden border border-2 border-light">
                <video controls poster="https://images.unsplash.com/photo-1581093458791-869b0d1419d1" class="object-fit-cover">
                    <source src="{{ asset('assets/P2TL.mp4') }}" type="video/mp4">
                    Browser Anda tidak mendukung pemutaran video.
                </video>
                <div class="position-absolute bottom-0 start-0 p-3 bg-dark bg-opacity-50 w-100">
                    <p class="text-white mb-0 small">Video Penjelasan P2TL</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="p-4 p-lg-4 bg-white rounded-4 shadow-sm border border-light">
                <span class="badge bg-primary bg-gradient mb-3 fs-6">
                    <i class="bi bi-info-circle-fill me-1"></i>Tentang P2TL
                </span>
                <h2 class="fw-bold mb-3 text-gradient text-primary">Apa itu P2TL?</h2>
                <p class="lead mb-4">
                    <strong>Penertiban Pemakaian Tenaga Listrik (P2TL)</strong> adalah kegiatan pengawasan dan tindakan oleh PLN terhadap pelanggan yang menggunakan listrik tidak sesuai ketentuan.
                </p>
                <p class="mb-4">
                    Tujuannya untuk mengurangi kerugian energi, mencegah praktik ilegal, dan menjaga keadilan bagi seluruh pelanggan listrik.
                </p>
                <div class="d-flex align-items-center mt-4 p-3 bg-light rounded-3">
                    <i class="bi bi-lightning-charge-fill text-warning fs-3 me-3"></i>
                    <div>
                        <h6 class="mb-0">Keuntungan P2TL</h6>
                        <small class="text-muted">Menjaga keandalan sistem tenaga listrik nasional</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jenis Pelanggaran - Card lebih interaktif -->
    <div class="mb-5 py-5" id="pelanggaran">
        <div class="text-center mb-5">
            <span class="badge bg-danger bg-gradient mb-3 px-3 py-2 fs-6">
                <i class="bi bi-exclamation-octagon-fill me-1"></i>Penting
            </span>
            <h2 class="fw-bold mb-3">Jenis-Jenis Pelanggaran</h2>
            <p class="text-muted">Bentuk pelanggaran yang sering ditemukan dalam penggunaan tenaga listrik</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-danger border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-danger bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-plug-fill text-danger fs-2"></i>
                        </div>
                        <h5 class="card-title fw-bold">Colok Langsung</h5>
                        <p class="card-text text-muted small">Pemakaian langsung tanpa kWh meter</p>
                        <div class="mt-3">
                            <span class="badge bg-danger bg-opacity-10 text-danger small">Pelanggaran Berat</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-danger border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-danger bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-tools text-danger fs-2"></i>
                        </div>
                        <h5 class="card-title fw-bold">Modifikasi Meter</h5>
                        <p class="card-text text-muted small">KWh meter dimodifikasi atau dirusak</p>
                        <div class="mt-3">
                            <span class="badge bg-danger bg-opacity-10 text-danger small">Pelanggaran Berat</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-danger border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-danger bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-arrow-left-right text-danger fs-2"></i>
                        </div>
                        <h5 class="card-title fw-bold">Pembalikan Fase</h5>
                        <p class="card-text text-muted small">Pembalikan fase pada instalasi</p>
                        <div class="mt-3">
                            <span class="badge bg-danger bg-opacity-10 text-danger small">Pelanggaran Teknis</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-danger border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-danger bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-graph-down text-danger fs-2"></i>
                        </div>
                        <h5 class="card-title fw-bold">Pengurangan Beban</h5>
                        <p class="card-text text-muted small">Pengurangan beban tercatat secara ilegal</p>
                        <div class="mt-3">
                            <span class="badge bg-danger bg-opacity-10 text-danger small">Pelanggaran Administratif</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Prosedur - Warna lebih soft -->
    <div class="mb-5 py-5 bg-light bg-gradient bg-opacity-25 rounded-4" id="prosedur">
        <div class="text-center mb-5">
            <span class="badge bg-success bg-gradient mb-3 px-3 py-2 fs-6">
                <i class="bi bi-diagram-3-fill me-1"></i>Proses
            </span>
            <h2 class="fw-bold mb-3">Prosedur P2TL</h2>
            <p class="text-muted">Tahapan penertiban pemakaian tenaga listrik oleh PLN</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <span class="fw-bold text-success fs-2">1</span>
                        </div>
                        <h5 class="card-title fw-bold">Pemeriksaan Lapangan</h5>
                        <p class="card-text text-muted small">Tim P2TL melakukan pemeriksaan ke lokasi pelanggan</p>
                        <div class="mt-3">
                            <span class="badge bg-success bg-opacity-10 text-success small">Tahap Awal</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <span class="fw-bold text-success fs-2">2</span>
                        </div>
                        <h5 class="card-title fw-bold">Pembuatan BAP</h5>
                        <p class="card-text text-muted small">Dokumentasi pelanggaran dalam Berita Acara Pemeriksaan</p>
                        <div class="mt-3">
                            <span class="badge bg-success bg-opacity-10 text-success small">Dokumentasi</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <span class="fw-bold text-success fs-2">3</span>
                        </div>
                        <h5 class="card-title fw-bold">Pemberian Sanksi</h5>
                        <p class="card-text text-muted small">Penyesuaian tagihan sesuai ketentuan</p>
                        <div class="mt-3">
                            <span class="badge bg-success bg-opacity-10 text-success small">Penindakan</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <span class="fw-bold text-success fs-2">4</span>
                        </div>
                        <h5 class="card-title fw-bold">Pelunasan</h5>
                        <p class="card-text text-muted small">Pelanggan wajib melunasi biaya sesuai BAP</p>
                        <div class="mt-3">
                            <span class="badge bg-success bg-opacity-10 text-success small">Penyelesaian</span>
                        </div>
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
@endsection
    