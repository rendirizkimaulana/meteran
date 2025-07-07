@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold display-5">Simulasi Pemasangan Meteran Listrik</h1>
        <p class="lead text-muted">Latihan interaktif untuk memahami proses instalasi meteran listrik</p>
    </div>

    <div class="row g-4 justify-content-center">
        <!-- Kotak 1: Simulasi Meteran Prabayar -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-primary shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">🔋 Simulasi Meteran Prabayar</h4>
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="simulation-placeholder bg-light rounded p-3 mb-3 flex-grow-1 d-flex align-items-center justify-content-center">
                        <img src="https://via.placeholder.com/400x250?text=Simulasi+Prabayar" alt="Simulasi Meteran Prabayar" class="img-fluid rounded">
                    </div>
                    <div class="mt-auto">
                        <button class="btn btn-primary w-100 py-2">Mulai Simulasi Prabayar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kotak 2: Simulasi Meteran Pascabayar -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-success shadow-sm">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">💳 Simulasi Meteran Pascabayar</h4>
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="simulation-placeholder bg-light rounded p-3 mb-3 flex-grow-1 d-flex align-items-center justify-content-center">
                        <img src="https://via.placeholder.com/400x250?text=Simulasi+Pascabayar" alt="Simulasi Meteran Pascabayar" class="img-fluid rounded">
                    </div>
                    <div class="mt-auto">
                        <button class="btn btn-success w-100 py-2">Mulai Simulasi Pascabayar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kotak 3: Gabungan Kuis dan Tentang Web -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-info shadow-sm">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">🧠 Kuis & Informasi</h4>
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="simulation-placeholder bg-light rounded p-3 mb-3 flex-grow-1 d-flex align-items-center justify-content-center">
                        <img src="https://via.placeholder.com/400x250?text=Kuis+dan+Informasi" alt="Kuis dan Informasi" class="img-fluid rounded">
                    </div>
                    <div class="d-grid gap-2 mt-auto">
                        <button class="btn btn-warning py-2">Mulai Kuis</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="alert alert-info mt-4">
        💡 <strong>Tips:</strong> Pilih salah satu simulasi di atas untuk memulai. Anda juga bisa mencoba kuis atau melihat informasi tentang web ini.
    </div>
</div>

<style>
    .simulation-placeholder {
        min-height: 250px;
        overflow: hidden;
    }
    
    .card {
        transition: transform 0.2s;
    }
    
    .card:hover {
        transform: translateY(-5px);
    }
    
    .card img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
@endsection