@extends('layouts.app')

@section('content')
<div class="container py-5">
    <!-- Hero Section -->
    <div class="text-center mb-5 py-4 bg-primary bg-opacity-10 rounded-4">
        <h1 class="fw-bold display-5 text-primary mb-3">
            <i class=""></i>Materi Instalasi Listrik
        </h1>
        <p class="lead text-muted">
            Perlengkapan dan material yang diperlukan untuk instalasi listrik sesuai standar PLN
        </p>
    </div>

    <div class="row g-4">
        <!-- Safety Wear Card -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-primary border-2 shadow-sm hover-shadow-lg transition-all">
                <div class="card-header bg-primary bg-opacity-10">
                    <h3 class="fw-bold mb-0 text-primary">
                        <i class="bi bi-shield-check me-2"></i>Safety Wear
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            <span>Helm proyek</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            <span>Sarung tangan karet isolator</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            <span>Sepatu safety</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Seragam Card -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-primary border-2 shadow-sm hover-shadow-lg transition-all">
                <div class="card-header bg-primary bg-opacity-10">
                    <h3 class="fw-bold mb-0 text-primary">
                        <i class="bi bi-person-badge me-2"></i>Seragam
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            <span>Seragam resmi dari PLN</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            <span>ID Card petugas</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Alat Card -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-primary border-2 shadow-sm hover-shadow-lg transition-all">
                <div class="card-header bg-primary bg-opacity-10">
                    <h3 class="fw-bold mb-0 text-primary">
                        <i class="bi bi-tools me-2"></i>Alat Kerja
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            <span>Obeng (+) dan (-)</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            <span>Test pen/voltage tester</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            <span>Tang potong</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            <span>Multimeter digital</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Material PLN Card -->
        <div class="col-md-6 col-lg-6">
            <div class="card h-100 border-success border-2 shadow-sm hover-shadow-lg transition-all">
                <div class="card-header bg-success bg-opacity-10">
                    <h3 class="fw-bold mb-0 text-success">
                        <i class="bi bi-lightning-charge me-2"></i>Material PLN
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span>KWH Meter (dari PLN)</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span>Kabel SR/DX</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span>Segel resmi PLN</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span>MCB (sesuai daya)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Material Pelanggan Card -->
        <div class="col-md-6 col-lg-6">
            <div class="card h-100 border-warning border-2 shadow-sm hover-shadow-lg transition-all">
                <div class="card-header bg-warning bg-opacity-10">
                    <h3 class="fw-bold mb-0 text-warning">
                        <i class="bi bi-house-gear me-2"></i>Material Pelanggan
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-warning me-2"></i>
                            <span>Kabel instalasi dalam rumah (sudah siap)</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-warning me-2"></i>
                            <span>Kabel tufur</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-warning me-2"></i>
                            <span>Grounding system</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-warning me-2"></i>
                            <span>Solatip isolasi</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-warning me-2"></i>
                            <span>Pipa instalasi (jika diperlukan)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Important Notes -->
    <div class="alert alert-warning mt-5 bg-warning bg-opacity-10 border-start border-4 border-warning rounded-4">
        <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
                <i class="bi bi-exclamation-triangle-fill text-warning fs-3"></i>
            </div>
            <div class="flex-grow-1 ms-3">
                <h5 class="alert-heading fw-bold">Perhatian!</h5>
                <p class="mb-0">Pastikan semua peralatan dan material memenuhi standar keselamatan dan sudah diperiksa sebelum melakukan instalasi listrik.</p>
                <hr>
                <div class="d-flex align-items-center small">
                    <i class="bi bi-lightbulb-fill me-2"></i>
                    <span>Gunakan selalu alat pelindung diri saat bekerja dengan listrik</span>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-shadow-lg:hover {
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
        transform: translateY(-5px);
    }
    .transition-all {
        transition: all 0.3s ease;
    }
    .list-group-item {
        border-left: 0;
        border-right: 0;
    }
    .list-group-item:first-child {
        border-top: 0;
    }
    .list-group-item:last-child {
        border-bottom: 0;
    }
</style>
@endsection