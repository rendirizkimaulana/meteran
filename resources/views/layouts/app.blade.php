<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .dropdown-submenu {
            position: relative;
        }
        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }
    </style>
</head>
<body>
<div id="app">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ url('/home') }}">
                Meteran Listrik
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    @auth
                        @if(Auth::user()->role !== 'admin')
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="simulasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Simulasi
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="simulasiDropdown">
                                    <li><a class="dropdown-item" href="{{ url('/materi') }}">Pelajari Materi</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/simulasi') }}">Mulai Simulasi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('kuiz.index') }}">Kuiz</a></li>
                                    <li><a class="dropdown-item" href="{{ route('kuiz.result') }}">Lihat Hasil Kuiz</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="bisnisDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Bisnis
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="bisnisDropdown">
                                    <li><a class="dropdown-item" href="{{ url('/p2tl') }}">P2TL</a></li>
                                    <li class="dropdown-submenu position-relative">
                                        <a class="dropdown-item dropdown-toggle" href="#">Bilman</a>
                                        <ul class="dropdown-menu position-absolute start-100 top-0 mt-0">
                                            <li><a class="dropdown-item" href="{{ url('/bilman/catatmeter') }}">Catat Meter</a></li>
                                            <li><a class="dropdown-item" href="{{ url('/bilman/prabayar') }}">Prabayar</a></li>
                                            <li><a class="dropdown-item" href="{{ url('/bilman/pascabayar') }}">Pascabayar</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ url('/tunggakan') }}">Penanganan Tunggakan 1 Bulan</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="{{ url('/profil') }}">Profil Perusahaan</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/kontak') }}">Kontak</a></li>
                        @endif
                    @endauth
                </ul>

                <!-- Right Side -->
                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endif
                    @else
                        @if(Auth::user()->role === 'admin')
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard Admin</a></li>
                        @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-4">
        @yield('content')
    </main>

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

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Submenu hover JS -->
<script>
    document.querySelectorAll('.dropdown-submenu').forEach(function (element) {
        element.addEventListener('mouseenter', function () {
            const submenu = element.querySelector('.dropdown-menu');
            submenu.classList.add('show');
        });
        element.addEventListener('mouseleave', function () {
            const submenu = element.querySelector('.dropdown-menu');
            submenu.classList.remove('show');
        });
    });
</script>
</body>
</html>