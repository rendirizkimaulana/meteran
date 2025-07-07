<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'PT Citacontrac - Simulasi Instalasi Meteran Listrik')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    @stack('styles')
    <link href="{{ asset('css/appuser.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
                <img src="{{ asset('assets/logopt.png') }}" alt="Logo" class="d-inline-block align-top">
                PT.Citacontrac
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="simulasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Simulasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="simulasiDropdown">
                            <li><a class="dropdown-item" href="{{ url('/materi') }}">Pelajari Materi</a></li>
                            <li><a class="dropdown-item" href="{{ url('/simulasi') }}">Mulai Simulasi</a></li>
                            
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="bisnisDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bisnis
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="bisnisDropdown">
                            <li><a class="dropdown-item" href="{{ url('/p2tl') }}">P2TL</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Bilman</a>
                                <ul class="dropdown-menu">
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
                </ul>

                <div class="auth-buttons">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-logout btn-auth">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-login btn-auth">
                            <i class="bi bi-box-arrow-in-right"></i>
                            <span>Login</span>
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-register btn-auth">
                            <i class="bi bi-person-plus"></i>
                            <span>Register</span>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-white mb-4">PT Citacontrac</h5>
                    <p>Platform edukatif untuk memahami instalasi listrik sesuai standar PLN dengan teknologi simulasi interaktif.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Menu</h5>
                        <ul>
                            <li><a href="{{ route('home') }}">Beranda</a></li>
                            <li><a href="{{ url('/simulasi') }}">Simulasi</a></li>
                            <li><a href="{{ url('/materi') }}">Materi</a></li>
                            <li><a href="{{ url('/profil') }}">Profil</a></li>
                            <li><a href="{{ url('/kontak') }}">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Layanan</h5>
                        <ul>
                            <li><a href="{{ url('/p2tl') }}">P2TL</a></li>
                            <li><a href="{{ url('/bilman/catatmeter') }}">Catat Meter</a></li>
                            <li><a href="{{ url('/bilman/prabayar') }}">Prabayar</a></li>
                            <li><a href="{{ url('/bilman/pascabayar') }}">Pascabayar</a></li>
                            <li><a href="{{ url('/tunggakan') }}">Penanganan Tunggakan</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h5>Kontak Kami</h5>
                        <ul class="contact-info">
                            <li><i class="bi bi-geo-alt me-2"></i> Jl. Listrik Raya No. 123, Jakarta Pusat</li>
                            <li><i class="bi bi-telephone me-2"></i> +62 21 1234 5678</li>
                            <li><i class="bi bi-envelope me-2"></i> info@citacontrac.co.id</li>
                            <li><i class="bi bi-clock me-2"></i> Senin-Jumat: 08.00 - 17.00 WIB</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                © {{ date('Y') }} PT Citacontrac. Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Enable dropdown submenu functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize all dropdowns
            var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
            var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
                return new bootstrap.Dropdown(dropdownToggleEl);
            });
            
            // Handle submenu hover
            var dropdownSubmenus = document.querySelectorAll('.dropdown-submenu');
            dropdownSubmenus.forEach(function(item) {
                item.addEventListener('mouseenter', function() {
                    this.querySelector('.dropdown-menu').classList.add('show');
                });
                item.addEventListener('mouseleave', function() {
                    this.querySelector('.dropdown-menu').classList.remove('show');
                });
            });
            
            // Close dropdowns when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.matches('.dropdown-toggle')) {
                    var dropdowns = document.querySelectorAll('.dropdown-menu');
                    dropdowns.forEach(function(dropdown) {
                        if (dropdown.classList.contains('show')) {
                            dropdown.classList.remove('show');
                        }
                    });
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html>