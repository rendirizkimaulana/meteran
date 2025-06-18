<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - PT Citacontrac</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #fff; }
        .navbar { box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">PT Citacontrac</a>
        <div class="d-flex">
            <a class="btn btn-outline-primary me-2 {{ request()->routeIs('login') ? 'fw-bold' : '' }}" href="{{ route('login') }}">Login</a>
            <a class="btn btn-primary {{ request()->routeIs('register') ? 'active fw-bold' : '' }}" href="{{ route('register') }}">Register</a>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
            <div class="card bg-white rounded shadow-lg border-0 overflow-hidden wow animate__animated animate__fadeInDown">
                <div class="row g-0">
                    <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center bg-light p-3">
                        <img src="{{ asset('assets/p3.png') }}" alt="Register Illustration"
                             class="img-fluid rounded shadow" style="max-height: 450px; object-fit: contain;">
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

                        <div class="text-center mt-3">
                            <a href="{{ url('/') }}" class="btn btn-outline-secondary">← Kembali ke Welcome</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

        <!-- Footer -->
    <footer class="bg-primary text-white pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold"><i class="bi bi-lightning-charge-fill text-warning"></i> PT Citacontrac</h5>
                    <p class="small">Platform edukatif untuk memahami instalasi listrik sesuai standar PLN dengan teknologi simulasi interaktif.</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="text-white fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold mb-3">Tautan Cepat</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#" class="text-white text-decoration-none">Beranda</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Fitur</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Panduan</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Galeri</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Tentang Kami</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold mb-3">Kontak Kami</h6>
                    <p class="small mb-1"><i class="bi bi-geo-alt-fill text-warning"></i> Jl. Listrik Raya No. 123, Jakarta Pusat</p>
                    <p class="small mb-1"><i class="bi bi-telephone-fill text-warning"></i> +62 21 1234 5678</p>
                    <p class="small"><i class="bi bi-envelope-fill text-warning"></i> info@citacontrac.co.id</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold mb-3">Lokasi Kami</h6>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5744531446473!2d106.87790719999999!3d-6.2887064999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f29a44b0cbf7%3A0xbcf0d6fc2a8b8768!2sPT%20Citacontrac!5e0!3m2!1sen!2sid!4v1718420000000!5m2!1sen!2sid"
                        width="100%" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        class="rounded shadow-sm">
                    </iframe>
                    <p class="small mt-2">Silakan kunjungi kantor kami untuk informasi lebih lanjut atau konsultasi langsung.</p>
                </div>
            </div>
            <div class="text-center border-top pt-3 mt-3 small">
                © 2023 PT Citacontrac. Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>new WOW().init();</script>
</body>
</html>
