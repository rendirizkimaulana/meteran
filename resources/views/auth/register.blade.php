@extends('layouts.app')

@section('content')


<div class="container py-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
            <div class="card bg-white rounded shadow-lg border-0 overflow-hidden wow animate__animated animate__fadeInDown">
                <div class="row g-0">
                    <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center bg-light p-3">
                        <img src="{{ asset('assets/iklan2.png') }}" alt="Register Illustration"
                             class="" style="max-height: 450px; object-fit: contain;">
                    </div>
                    <div class="col-md-6 p-5">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold text-primary">Daftar Akun Baru</h3>
                            <p class="text-muted">Buat akun untuk melanjutkan</p>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autofocus>
                                @error('name')
                                    <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password" required>
                                @error('password')
                                    <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">Konfirmasi Kata Sandi</label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
                            </div>
                        </form>

                        <div class="text-center mt-4">
                            Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

@endsection

