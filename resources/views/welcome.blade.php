<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi Listrik Modern</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f0f4ff;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Hero Section */
        .hero {
            padding: 6rem 2rem;
            background: linear-gradient(135deg, #f0f4ff, #e0e9ff);
            background-attachment: fixed;
            animation: fadeIn 1s ease-in-out;
        }

        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #2563eb;
            opacity: 0;
            animation: slideIn 1s forwards;
        }

        .highlight {
            color: #2563eb;
        }

        .feature-box {
            border-radius: 12px;
            background-color: #e6f0ff;
            padding: 2rem;
            height: 100%;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background: linear-gradient(to right, #2563eb, #1d4ed8);
            border: none;
            transition: transform 0.3s ease;
        }

        .btn-primary:hover {
            transform: scale(1.05);
        }

        .user-badge {
            background-color: #2563eb;
            color: white;
            padding: 0.3rem 0.6rem;
            border-radius: 999px;
            font-size: 0.85rem;
        }

        /* Feature Box Animation */
        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateX(-50px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Footer Styling */
        footer {
            background-color: #2563eb;
            color: white;
            padding-top: 3rem;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Footer Social Icons */
        .social-icons a {
            font-size: 1.5rem;
            transition: transform 0.3s ease;
        }

        .social-icons a:hover {
            transform: scale(1.2);
        }

        /* Navbar */
        .navbar {
            padding: 1rem 0;
        }
    </style>
</head>

<body>

    <!-- Navbar with Logo and Login/Register -->
    <nav class="navbar navbar-light bg-white shadow-sm">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="assets/logopt.png" alt="Logo" width="40" height="40" class="me-2">
                <span class="fw-bold text-primary">PT CitaContrac</span>
            </a>
            <div>
                <a href="{{ route('login') }}" class="btn btn-link">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary ms-2">Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container-fluid hero">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="mb-3">Simulasi Pemasangan <span class="highlight">Listrik Modern</span></h1>
                <p class="lead">Edukasi interaktif pemasangan listrik sesuai standar PLN. Pelajari cara memasang instalasi listrik yang aman dan efisien melalui simulasi digital.</p>
                <div class="d-flex gap-3 mt-4 justify-content-center justify-content-lg-start">
                    <a href="#" class="btn btn-primary">Mulai Belajar</a>
                    <a href="#" class="btn btn-outline-primary">Pelajari Lebih Lanjut</a>
                </div>
                <div class="mt-4 d-flex justify-content-center justify-content-lg-start gap-2">
                    <span class="user-badge">JD</span>
                    <span class="user-badge">RS</span>
                    <span class="user-badge">TH</span>
                    <small class="text-muted ms-2">Bergabung dengan <span class="text-primary fw-semibold">1,000+</span> pengguna lainnya</small>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="bg-white p-4 rounded shadow-sm">
                    <div class="text-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#2563eb" class="bi bi-lightning-fill" viewBox="0 0 16 16">
                            <path d="M11.3 1L4.4 8.3h3.3L4.7 15 12 7.8H8.8z" />
                        </svg>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>Simulasi Interaktif</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>Sesuai Standar PLN</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>Sertifikat Keahlian</li>
                    </ul>
                    <div class="d-grid mt-4">
                        <a href="{{ route('register') }}" class="btn btn-primary">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container text-center py-5">
        <h2 class="fw-bold mb-4">Fitur Unggulan</h2>
        <p class="mb-5">Pelajari instalasi listrik dengan cara yang lebih mudah dan interaktif</p>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-box" style="animation: slideIn 1s ease-in-out;">
                    <div class="mb-3">
                        <i class="bi bi-lightbulb-fill fs-2 text-primary"></i>
                    </div>
                    <h5>Simulasi Interaktif</h5>
                    <p>Praktikkan langsung pemasangan listrik dalam lingkungan virtual yang aman dan interaktif.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box" style="animation: slideIn 1s ease-in-out;">
                    <div class="mb-3">
                        <i class="bi bi-book-fill fs-2 text-primary"></i>
                    </div>
                    <h5>Materi Lengkap</h5>
                    <p>Akses materi pembelajaran yang komprehensif tentang instalasi listrik sesuai standar PLN.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box" style="animation: slideIn 1s ease-in-out;">
                    <div class="mb-3">
                        <i class="bi bi-award-fill fs-2 text-primary"></i>
                    </div>
                    <h5>Sertifikasi</h5>
                    <p>Dapatkan sertifikat keahlian setelah menyelesaikan semua modul pembelajaran.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold"><i class="bi bi-lightning-charge-fill text-warning"></i> PT Citacontrac</h5>
                    <p class="small">Platform edukatif untuk memahami instalasi listrik sesuai standar PLN dengan teknologi simulasi interaktif.</p>
                    <div class="d-flex gap-2 social-icons">
                        <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5744531446473!2d106.87790719999999!3d-6.2887064999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f29a44b0cbf7%3A0xbcf0d6fc2a8b8768!2sPT%20Citacontrac!5e0!3m2!1sen!2sid!4v1718420000000!5m2!1sen!2sid" width="100%" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded shadow-sm"></iframe>
                    <p class="small mt-2">Silakan kunjungi kantor kami untuk informasi lebih lanjut atau konsultasi langsung.</p>
                </div>
            </div>
            <div class="text-center border-top pt-3 mt-3 small">
                © 2023 PT Citacontrac. Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>

    <!-- Bootstrap + Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
