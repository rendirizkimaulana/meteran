@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Hero Section - Lebih mencolok dengan efek visual -->
    <div class="text-center mb-5 py-5 bg-warning bg-gradient bg-opacity-10 rounded-4 border-start border-4 border-warning shadow-sm position-relative overflow-hidden">
        
        <h1 class="fw-bold display-5 text-dark mb-3 position-relative">
            <i class="bi bi-exclamation-triangle-fill text-warning me-2"></i>Penanganan Tunggakan 1 Bulan
        </h1>
        <p class="lead text-muted mb-4 position-relative">
            Prosedur sistematis PT Citacontrac dalam menangani pelanggan menunggak pembayaran
        </p>
        <div class="d-flex justify-content-center gap-3 mt-3 position-relative">
            <a href="#prosedur" class="btn btn-warning px-4 py-2 rounded-pill shadow-sm fw-medium">
                <i class="bi bi-list-check me-2"></i>Lihat Prosedur
            </a>
            <a href="#pln-mobile" class="btn btn-outline-warning px-4 py-2 rounded-pill fw-medium">
                <i class="bi bi-phone me-2"></i>PLN Mobile
            </a>
        </div>
    </div>

    <!-- Prosedur Section - Timeline lebih visual -->
    <div id="prosedur" class="mb-5">
        <div class="text-center mb-5">
            <span class="badge bg-warning bg-gradient text-dark mb-3 px-3 py-2 fs-6">
                <i class="bi bi-diagram-3-fill me-1"></i>Prosedur
            </span>
            <h2 class="fw-bold mb-3">Tahapan Penanganan Tunggakan</h2>
            <p class="text-muted">Langkah sistematis untuk membantu pelanggan menyelesaikan tunggakan</p>
        </div>

        <!-- Timeline - Lebih terstruktur -->
        <div class="row g-4">
            <!-- Step 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-warning border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 start-0 bg-warning text-white px-3 py-1 small fw-bold">
                            Tahap 1
                        </div>
                        <div class="d-flex align-items-center mb-3 mt-2">
                            <div class="bg-warning bg-opacity-10 rounded-circle p-3 me-3">
                                <span class="fw-bold text-warning fs-2">1</span>
                            </div>
                            <h4 class="card-title mb-0 fw-bold">Identifikasi</h4>
                        </div>
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex">
                                <i class="bi bi-check-circle-fill text-warning me-2"></i>
                                <span class="small">Pengecekan data pelanggan melalui dashboard monitoring</span>
                            </li>
                            <li class="d-flex">
                                <i class="bi bi-check-circle-fill text-warning me-2"></i>
                                <span class="small">Verifikasi nomor pelanggan dan riwayat pembayaran</span>
                            </li>
                        </ul>
                        <div class="mt-3 pt-2 border-top">
                            <span class="badge bg-warning bg-opacity-10 text-warning small">
                                <i class="bi bi-clock-history me-1"></i>0-2 Hari
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-warning border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 start-0 bg-warning text-white px-3 py-1 small fw-bold">
                            Tahap 2
                        </div>
                        <div class="d-flex align-items-center mb-3 mt-2">
                            <div class="bg-warning bg-opacity-10 rounded-circle p-3 me-3">
                                <span class="fw-bold text-warning fs-2">2</span>
                            </div>
                            <h4 class="card-title mb-0 fw-bold">Pemberitahuan</h4>
                        </div>
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex">
                                <i class="bi bi-envelope-fill text-warning me-2"></i>
                                <span class="small">Notifikasi via SMS/email tentang tunggakan</span>
                            </li>
                            <li class="d-flex">
                                <i class="bi bi-mailbox text-warning me-2"></i>
                                <span class="small">Surat peringatan ke alamat pelanggan</span>
                            </li>
                        </ul>
                        <div class="mt-3 pt-2 border-top">
                            <span class="badge bg-warning bg-opacity-10 text-warning small">
                                <i class="bi bi-clock-history me-1"></i>3-5 Hari
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-warning border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 start-0 bg-warning text-white px-3 py-1 small fw-bold">
                            Tahap 3
                        </div>
                        <div class="d-flex align-items-center mb-3 mt-2">
                            <div class="bg-warning bg-opacity-10 rounded-circle p-3 me-3">
                                <span class="fw-bold text-warning fs-2">3</span>
                            </div>
                            <h4 class="card-title mb-0 fw-bold">Kunjungan</h4>
                        </div>
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex">
                                <i class="bi bi-house-door-fill text-warning me-2"></i>
                                <span class="small">Tim lapangan mengunjungi pelanggan</span>
                            </li>
                            <li class="d-flex">
                                <i class="bi bi-cash-coin text-warning me-2"></i>
                                <span class="small">Penawaran solusi pembayaran/cicilan</span>
                            </li>
                        </ul>
                        <div class="mt-3 pt-2 border-top">
                            <span class="badge bg-warning bg-opacity-10 text-warning small">
                                <i class="bi bi-clock-history me-1"></i>6-10 Hari
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-danger border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 start-0 bg-danger text-white px-3 py-1 small fw-bold">
                            Tahap 4
                        </div>
                        <div class="d-flex align-items-center mb-3 mt-2">
                            <div class="bg-danger bg-opacity-10 rounded-circle p-3 me-3">
                                <span class="fw-bold text-danger fs-2">4</span>
                            </div>
                            <h4 class="card-title mb-0 fw-bold">Tindakan Lanjut</h4>
                        </div>
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex">
                                <i class="bi bi-lightning-charge-fill text-danger me-2"></i>
                                <span class="small">Pemutusan sementara sambungan listrik</span>
                            </li>
                            <li class="d-flex">
                                <i class="bi bi-receipt text-danger me-2"></i>
                                <span class="small">Biaya pemutusan/penyambungan dibebankan</span>
                            </li>
                        </ul>
                        <div class="mt-3 pt-2 border-top">
                            <span class="badge bg-danger bg-opacity-10 text-danger small">
                                <i class="bi bi-clock-history me-1"></i>11-14 Hari
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 start-0 bg-success text-white px-3 py-1 small fw-bold">
                            Tahap 5
                        </div>
                        <div class="d-flex align-items-center mb-3 mt-2">
                            <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3">
                                <span class="fw-bold text-success fs-2">5</span>
                            </div>
                            <h4 class="card-title mb-0 fw-bold">Penyambungan</h4>
                        </div>
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span class="small">Pengajuan permintaan penyambungan kembali</span>
                            </li>
                            <li class="d-flex">
                                <i class="bi bi-clock-fill text-success me-2"></i>
                                <span class="small">Proses maksimal 1x24 jam kerja</span>
                            </li>
                        </ul>
                        <div class="mt-3 pt-2 border-top">
                            <span class="badge bg-success bg-opacity-10 text-success small">
                                <i class="bi bi-clock-history me-1"></i>Setelah Pelunasan
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-primary border-2 shadow-sm hover-shadow-lg transition-all">
                    <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 start-0 bg-primary text-white px-3 py-1 small fw-bold">
                            Tahap 6
                        </div>
                        <div class="d-flex align-items-center mb-3 mt-2">
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                <span class="fw-bold text-primary fs-2">6</span>
                            </div>
                            <h4 class="card-title mb-0 fw-bold">Pencegahan</h4>
                        </div>
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex">
                                <i class="bi bi-phone-fill text-primary me-2"></i>
                                <span class="small">Pemantauan tagihan via PLN Mobile</span>
                            </li>
                            <li class="d-flex">
                                <i class="bi bi-bell-fill text-primary me-2"></i>
                                <span class="small">Notifikasi jatuh tempo pembayaran</span>
                            </li>
                        </ul>
                        <div class="mt-3 pt-2 border-top">
                            <span class="badge bg-primary bg-opacity-10 text-primary small">
                                <i class="bi bi-shield-check me-1"></i>Pencegahan
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PLN Mobile Section - Lebih menarik -->
    <div class="my-5 py-5 bg-light bg-gradient bg-opacity-25 rounded-4 shadow-sm" id="pln-mobile">
        <div class="row align-items-center g-4">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="p-4 p-lg-5">
                    <span class="badge bg-primary bg-gradient mb-3 px-3 py-2">
                        <i class="bi bi-phone-fill me-1"></i>Solusi Digital
                    </span>
                    <h2 class="fw-bold mb-3">Gunakan <span class="text-primary">PLN Mobile</span></h2>
                    <p class="lead mb-4">Aplikasi resmi PLN untuk memantau dan membayar tagihan listrik dengan mudah</p>
                    
                    <div class="mt-4">
                        <h5 class="fw-bold mb-3">Fitur Utama:</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex align-items-start">
                                <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3">
                                    <i class="bi bi-lightning-charge-fill text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Pantau Tagihan</h6>
                                    <p class="small text-muted mb-0">Status tagihan dan tunggakan real-time</p>
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3">
                                    <i class="bi bi-wallet-fill text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Pembayaran Mudah</h6>
                                    <p class="small text-muted mb-0">Bayar langsung melalui aplikasi</p>
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3">
                                    <i class="bi bi-bell-fill text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Notifikasi</h6>
                                    <p class="small text-muted mb-0">Peringatan jatuh tempo pembayaran</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3">
                                    <i class="bi bi-headset text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Layanan Pelanggan</h6>
                                    <p class="small text-muted mb-0">Pengaduan atau permintaan layanan teknis</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-4 p-lg-5 text-center position-relative">
                    
                    <div class="mb-4 position-relative">
                        <img src="assets/iklan5.png" alt="PLN Mobile" class="" style="max-height: 300px;">
                    </div>
                    <h5 class="fw-bold mb-3 position-relative">Unduh Sekarang</h5>
                    <div class="d-flex justify-content-center gap-3 position-relative">
                        <a href="https://play.google.com/store/apps/details?id=com.icon.pln123" target="_blank" class="btn btn-dark px-4 py-2 rounded-pill">
                            <i class="bi bi-google-play me-2"></i> Google Play
                        </a>
                        <a href="https://apps.apple.com/id/app/pln-mobile/id1502493371" target="_blank" class="btn btn-dark px-4 py-2 rounded-pill">
                            <i class="bi bi-apple me-2"></i> App Store
                        </a>
                    </div>
                    <div class="mt-4 small text-muted position-relative">
                        Tersedia untuk Android dan iOS
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