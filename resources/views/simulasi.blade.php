@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold display-5">Simulasi Pemasangan Meteran Listrik</h1>
        <p class="lead text-muted">Latihan interaktif untuk memahami proses instalasi meteran listrik</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <div class="border rounded-4 p-4 bg-light shadow-sm">
                <h4 class="mb-3">👷‍♂️ Area Simulasi</h4>
                <div class="bg-white rounded p-3 mb-3" style="height: 400px;">
                    <!-- Placeholder simulasi -->
                    <p class="text-muted mt-5">[ Area simulasi interaktif akan ditampilkan di sini ]</p>
                </div>

                <div class="d-flex justify-content-center gap-3 mt-4">
                    <button class="btn btn-primary px-4 py-2">Mulai Simulasi</button>
                    <button class="btn btn-outline-secondary px-4 py-2">Reset</button>
                </div>
            </div>

            <div class="alert alert-info mt-4 text-start">
                💡 <strong>Tips:</strong> Klik tombol <strong>"Mulai Simulasi"</strong> untuk memulai proses instalasi. Pastikan mengikuti instruksi dengan benar.
            </div>
        </div>
    </div>
</div>
@endsection
