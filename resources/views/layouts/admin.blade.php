<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin - CITAC')</title>

    <!-- Meta Tags -->
    <meta name="description" content="Admin Dashboard for CITAC Quiz System">
    <meta name="author" content="Your Company">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/logopt.png') }}" type="image/png">

    <!-- CSS Assets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            /* Color Scheme */
            --primary-color: #4361ee;
            --primary-light: #eef2ff;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --gray-dark: #4a5568;
            --gray-medium: #718096;
            --gray-light: #e2e8f0;
            --success-color: #4cc9f0;
            --warning-color: #f8961e;
            --danger-color: #f72585;
            
            /* Layout */
            --sidebar-width: 250px;
            --topbar-height: 80px;
            --transition-speed: 0.3s;
            --border-radius: 10px;
            --box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.03);
            --box-shadow-hover: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
        }
        
        /* Base Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fb;
            color: var(--gray-dark);
            min-height: 100vh;
            padding-top: 0;
            line-height: 1.6;
        }
        
        a {
            text-decoration: none;
            transition: color var(--transition-speed) ease;
        }
        
        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            min-height: 100vh;
            background: linear-gradient(180deg, var(--primary-color), var(--secondary-color));
            position: fixed;
            top: 0;
            left: 0;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            transition: transform var(--transition-speed) ease;
            z-index: 1000;
            display: flex;
            flex-direction: column;
        }
        
        .sidebar-brand {
            padding: 1.5rem 1rem;
            color: white;
            font-weight: 700;
            font-size: 1.25rem;
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-logo {
            height: 40px;
            width: auto;
            margin-right: 12px;
            object-fit: contain;
            transition: transform 0.3s ease;
        }
        
        .sidebar-brand:hover .sidebar-logo {
            transform: rotate(-5deg);
        }
        
        .sidebar-nav {
            padding: 1.5rem 0;
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .nav-item {
            margin-bottom: 0.25rem;
        }
        
        .nav-link {
            color: rgba(255, 255, 255, 0.85);
            padding: 0.85rem 1.5rem;
            display: flex;
            align-items: center;
            transition: all var(--transition-speed) ease;
            border-left: 3px solid transparent;
            font-weight: 500;
            position: relative;
            overflow: hidden;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            transition: left var(--transition-speed) ease;
        }
        
        .nav-link:hover::before,
        .nav-link.active::before {
            left: 0;
        }
        
        .nav-link:hover, 
        .nav-link.active {
            color: white;
            border-left: 3px solid var(--accent-color);
        }
        
        .nav-link i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
            font-size: 1.1rem;
        }
        
        /* Logout Button */
        .logout-item {
            margin-top: auto;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 0.5rem;
        }
        
        .logout-button {
            background: transparent;
            border: none;
            width: 100%;
            text-align: left;
            padding: 0.85rem 1.5rem;
            color: rgba(255, 255, 255, 0.85);
            cursor: pointer;
            font-weight: 500;
            display: flex;
            align-items: center;
            transition: all var(--transition-speed) ease;
        }
        
        .logout-button:hover {
            color: white;
            background-color: rgba(255, 255, 255, 0.05);
            border-left: 3px solid var(--danger-color);
        }
        
        .logout-button i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
            font-size: 1.1rem;
        }
        
        /* Main Content Area */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 1.5rem;
            transition: margin-left var(--transition-speed) ease;
        }
        
        /* Top Bar */
        .topbar {
            background-color: white;
            padding: 1.25rem 1.5rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .topbar-title h1 {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 0;
            color: var(--dark-color);
        }
        
        .topbar-title p {
            font-size: 0.875rem;
            color: var(--gray-medium);
            margin: 0.25rem 0 0 0;
        }
        
        /* Cards */
        .card {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            transition: transform var(--transition-speed), box-shadow var(--transition-speed);
            margin-bottom: 1.5rem;
            background-color: white;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--box-shadow-hover);
        }
        
        .card-header {
            background-color: white;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            font-weight: 600;
            padding: 1rem 1.5rem;
            border-radius: var(--border-radius) var(--border-radius) 0 0 !important;
        }
        
        /* Welcome Box */
        .welcome-box {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            border-radius: var(--border-radius);
            padding: 2rem;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }
        
        .welcome-box::after {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }
        
        .welcome-box h2 {
            font-weight: 700;
            margin-bottom: 0.75rem;
            position: relative;
            z-index: 1;
        }
        
        .welcome-box p {
            opacity: 0.9;
            margin-bottom: 0;
            position: relative;
            z-index: 1;
            max-width: 80%;
        }
        
        /* Floating Action Button */
        .fab {
            position: fixed;
            bottom: 1.5rem;
            right: 1.5rem;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.3);
            cursor: pointer;
            z-index: 990;
            transition: all 0.3s ease;
            border: none;
        }
        
        .fab:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 6px 16px rgba(67, 97, 238, 0.4);
        }
        
        .fab i {
            font-size: 1.25rem;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.active {
                transform: translateX(0);
                box-shadow: 0 0 0 100vmax rgba(0, 0, 0, 0.5);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .sidebar-logo {
                height: 36px;
            }
            
            .sidebar-brand {
                padding: 1.25rem 1rem;
            }
            
            .welcome-box p {
                max-width: 100%;
            }
        }
        
        /* Animation for Page Transitions */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fade {
            animation: fadeIn 0.5s ease forwards;
        }
    </style>
    
    @stack('styles')
</head>
<body>

    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="sidebar-brand">
            <img src="{{ asset('assets/logopt.png') }}" alt="CITAC Logo" class="sidebar-logo">
            <span>Admin CITAC</span>
        </div>
        
        <nav class="sidebar-nav">
            <ul class="nav flex-column w-100">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('quiz.create') ? 'active' : '' }}" href="{{ route('quiz.create') }}">
                        <i class="fas fa-plus-circle"></i>
                        <span>Tambah Soal Kuiz</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('quiz.results') ? 'active' : '' }}" href="{{ route('quiz.results') }}">
                        <i class="fas fa-chart-pie"></i>
                        <span>Hasil Kuiz User</span>
                    </a>
                </li>
            </ul>
            
            <!-- Logout Section -->
            <div class="logout-item">
                <form method="POST" action="{{ route('logout') }}" class="w-100">
                    @csrf
                    <button type="submit" class="logout-button">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </nav>
    </aside>

    <!-- Main Content Area -->
    <main class="main-content">
        
        <!-- Page Content -->
        <div class="container-fluid px-0">
            @yield('content')
        </div>
    </main>

    <!-- Floating Action Button (Mobile Menu Toggle) -->
    <button class="fab d-lg-none" id="menuToggle">
        <i class="fas fa-bars"></i>
    </button>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile sidebar toggle
            const sidebar = document.querySelector('.sidebar');
            const menuToggle = document.getElementById('menuToggle');
            
            menuToggle.addEventListener('click', function() {
                sidebar.classList.toggle('active');
                
                // Change icon based on state
                const icon = this.querySelector('i');
                if (sidebar.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
            
            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', function(e) {
                if (window.innerWidth < 992 && 
                    !sidebar.contains(e.target) && 
                    e.target !== menuToggle && 
                    !menuToggle.contains(e.target)) {
                    sidebar.classList.remove('active');
                    menuToggle.querySelector('i').classList.remove('fa-times');
                    menuToggle.querySelector('i').classList.add('fa-bars');
                }
            });
            
            // Prevent closing when clicking inside sidebar
            sidebar.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>