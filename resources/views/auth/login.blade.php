@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
            <div class="card bg-white rounded shadow-lg border-0 overflow-hidden wow animate__animated animate__fadeInDown">
                <div class="row g-0">
                    <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center bg-light p-3">
                        <img src="{{ asset('assets/iklan4.png') }}" alt="Login Illustration"
                             class="" style="max-height: 450px; object-fit: contain;">
                    </div>
                    <div class="col-md-6 p-5">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold text-primary">Selamat Datang</h3>
                            <p class="text-muted">Silakan login untuk melanjutkan</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password" required>
                                @error('password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">Ingat saya</label>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">Masuk</button>
                            </div>

                            @if (Route::has('password.request'))
                                <div class="text-center mt-3">
                                    <a class="text-decoration-none" href="{{ route('password.request') }}">
                                        Lupa kata sandi?
                                    </a>
                                </div>
                            @endif
                        </form>

                        <div class="text-center mt-4">
                            Belum punya akun? <a href="{{ route('register') }}">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>


@endsection
