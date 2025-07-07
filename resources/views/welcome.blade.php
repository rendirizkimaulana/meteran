<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PT Citacontrac - Simulasi Instalasi Meteran Listrik</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --primary: #0054A6; /* PLN Blue */
            --secondary: #F9A01B; /* PLN Yellow */
            --dark: #1A1A1A;
            --light: #F8F9FA;
            --gray: #6C757D;
            --bg-light: #F5F7FA;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            background-color: var(--bg-light);
        }
        
        /* ===== Modern Navbar ===== */
        .navbar {
            background: white;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
            padding: 12px 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary);
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand span {
            color: var(--secondary);
        }
        
        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--dark);
            padding: 8px 15px;
            margin: 0 3px;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-link:hover, 
        .nav-link.active {
            color: var(--primary);
            background: rgba(0, 84, 166, 0.05);
        }
        
        /* ===== Enhanced Auth Buttons ===== */
        .auth-buttons {
            display: flex;
            gap: 12px;
            align-items: center;
        }
        
        .btn-auth {
            border-radius: 8px;
            padding: 8px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .btn-login {
            color: var(--primary);
            border: 2px solid var(--primary);
            background-color: transparent;
        }
        
        .btn-login:hover {
            background: rgba(0, 84, 166, 0.1);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 84, 166, 0.1);
        }
        
        .btn-login i {
            font-size: 1.1rem;
        }
        
        .btn-register {
            background: linear-gradient(135deg, var(--primary) 0%, #00458F 100%);
            color: white;
            border: none;
            box-shadow: 0 4px 12px rgba(0, 84, 166, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 84, 166, 0.3);
            color: white;
        }
        
        .btn-register::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -60%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(30deg);
            transition: all 0.3s;
        }
        
        .btn-register:hover::after {
            left: 100%;
        }
        
        /* ===== Hero Section ===== */
        .hero-section {
            background: linear-gradient(135deg, rgba(0, 84, 166, 0.9) 0%, rgba(26, 26, 26, 0.9) 100%), 
                        url('https://images.unsplash.com/photo-1508514177221-188b1cf16e9d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0 100px;
            border-radius: 0 0 20px 20px;
            margin-top: -20px;
        }
        
        .hero-title {
            font-weight: 700;
            font-size: 2.5rem;
            line-height: 1.3;
            margin-bottom: 20px;
        }
        
        .hero-subtitle {
            font-weight: 400;
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 30px;
        }
        
        /* ===== Card Styles ===== */
        .feature-card {
            background: white;
            border-radius: 12px;
            border: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            overflow: hidden;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .card-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
        }
        
        /* ===== Section Styles ===== */
        .section-title {
            font-weight: 700;
            color: var(--dark);
            position: relative;
            display: inline-block;
            margin-bottom: 30px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 4px;
            background: var(--secondary);
            bottom: -10px;
            left: 0;
            border-radius: 2px;
        }
        
        /* ===== PLN Mobile Ad ===== */
        .pln-ad {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }
        
        .pln-ad-header {
            background: var(--primary);
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 600;
        }
        
        .pln-ad-body {
            padding: 20px;
        }
        
        .pln-feature {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .pln-feature i {
            color: var(--secondary);
            font-size: 1.2rem;
            margin-right: 10px;
            margin-top: 3px;
        }
        
        .app-badge {
            height: 40px;
            margin-right: 10px;
        }
        
        /* ===== Footer ===== */
        .footer {
            background: var(--primary);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-links h5 {
            font-weight: 600;
            margin-bottom: 20px;
            position: relative;
        }
        
        .footer-links h5:after {
            content: '';
            position: absolute;
            width: 30px;
            height: 3px;
            background: var(--secondary);
            bottom: -8px;
            left: 0;
        }
        
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .social-icons a {
            color: white;
            font-size: 1.2rem;
            margin-right: 15px;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            transform: translateY(-3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 30px;
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }
        
        /* Dropdown submenu styles */
        .dropdown-menu {
            border-radius: 10px;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-top: 8px;
            padding: 10px 0;
        }
        
        .dropdown-item {
            padding: 8px 20px;
            font-weight: 500;
            transition: all 0.2s;
        }
        
        .dropdown-item:hover {
            background: rgba(0, 84, 166, 0.05);
            color: var(--primary);
            padding-left: 25px;
        }
        
        .dropdown-submenu {
            position: relative;
        }
        
        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -10px;
            margin-left: 0;
            display: none;
        }
        
        .dropdown-submenu:hover .dropdown-menu {
            display: block;
        }
        
        /* Contact info styles */
        .contact-info li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        
        /* ===== Mobile Responsive ===== */
        @media (max-width: 992px) {
            .navbar-collapse {
                padding: 20px 0;
            }
            
            .nav-item {
                margin-bottom: 5px;
            }
            
            .auth-buttons {
                flex-direction: column;
                gap: 10px;
                margin-top: 15px;
                padding-top: 15px;
                border-top: 1px solid rgba(0, 0, 0, 0.05);
            }
            
            .btn-auth {
                width: 100%;
                padding: 10px;
            }
            
            .dropdown-menu {
                margin-left: 15px;
                box-shadow: none;
                border-left: 2px solid rgba(0, 84, 166, 0.1);
            }
            
            .dropdown-submenu .dropdown-menu {
                left: 15px;
                right: auto;
                top: 0;
            }
        }
        
        @media (max-width: 768px) {
            .navbar {
                padding: 10px 0;
            }
            
            .navbar-brand {
                font-size: 1.3rem;
            }
            
            .hero-section {
                padding: 100px 0 80px;
                text-align: center;
                border-radius: 0;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .d-flex.gap-3 {
                flex-direction: column;
                gap: 10px !important;
            }
            
            .btn-lg {
                padding: 10px 20px;
                font-size: 1rem;
            }
            
            .footer {
                padding: 40px 0 20px;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 1.8rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
                <img src="assets/logopt.png" alt="Logo" class="d-inline-block align-top">
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
                    <a href="{{ route('login') }}" class="btn btn-login btn-auth">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span>Login</span>
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-register btn-auth">
                        <i class="bi bi-person-plus"></i>
                        <span>Register</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Simulasi Instalasi Meteran Listrik Profesional</h1>
                    <p class="hero-subtitle">Platform pelatihan interaktif untuk memahami instalasi meteran listrik sesuai standar PLN</p>
                    <div class="d-flex gap-3">
                        <a href="{{ url('/simulasi') }}" class="btn btn-light btn-lg px-4">Mulai Simulasi</a>
                        <a href="{{ url('/materi') }}" class="btn btn-outline-light btn-lg px-4">Pelajari Materi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">Keunggulan Platform Kami</h2>
                <p class="text-muted">Solusi lengkap untuk pelatihan instalasi meteran listrik</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card p-4 text-center">
                        <div class="card-icon">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h5>Simulasi Interaktif</h5>
                        <p class="text-muted">Praktik instalasi meteran listrik secara virtual dengan panduan step-by-step.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card p-4 text-center">
                        <div class="card-icon">
                            <i class="bi bi-book"></i>
                        </div>
                        <h5>Materi Lengkap</h5>
                        <p class="text-muted">Kurikulum komprehensif sesuai standar PLN dan peraturan terbaru.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card p-4 text-center">
                        <div class="card-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h5>Evaluasi Real-time</h5>
                        <p class="text-muted">Sistem penilaian otomatis dengan feedback instan untuk perbaikan.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card p-4 text-center">
                        <div class="card-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h5>Akses Mobile</h5>
                        <p class="text-muted">Belajar kapan saja, di mana saja melalui perangkat mobile Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                © 2023 PT Citacontrac. Hak Cipta Dilindungi.
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
</body>
</html>