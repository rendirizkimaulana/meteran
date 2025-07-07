@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="welcome-box">
        <h4 class="mb-1">Selamat Datang, {{ Auth::user()->name }} 🎉</h4>
        <p class="mb-0">Ini adalah panel admin untuk mengelola kuiz dan memantau performa pengguna.</p>
    </div>

    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-question-circle me-2"></i>Total Soal</h5>
                    <h3>{{ \App\Models\Quiz::count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-users me-2"></i>Total User</h5>
                    <h3>{{ \App\Models\User::where('role', 'user')->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-file-alt me-2"></i>Hasil Kuiz</h5>
                    <h3>{{ \App\Models\QuizResult::count() }}</h3>
                </div>
            </div>
        </div>
    </div>
@endsection