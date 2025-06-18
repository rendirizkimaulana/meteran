<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Meteran Listrik</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        body {
            min-height: 100vh;
            background-color: #f4f6f9;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            background-color: #343a40;
            color: white;
            padding-top: 60px;
        }
        .sidebar a {
            display: block;
            color: #c2c7d0;
            padding: 12px 20px;
            text-decoration: none;
            transition: all 0.3s;
        }
        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }
        .sidebar .brand {
            position: absolute;
            top: 0;
            width: 100%;
            height: 60px;
            background-color: #23272b;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
            color: #ffffff;
            border-bottom: 1px solid #444;
        }
        .main-content {
            margin-left: 250px;
            padding: 30px;
        }
        .card {
            box-shadow: 0 0.15rem 1rem rgba(0,0,0,0.05);
        }
        .welcome-box {
            background: linear-gradient(135deg, #007bff, #00c3ff);
            color: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="brand">Meteran Admin</div>
        <a href="{{ route('admin.dashboard') }}"><i class="fas fa-home me-2"></i>Dashboard</a>
        <a href="{{ route('quiz.create') }}"><i class="fas fa-plus me-2"></i>Tambah Soal Kuiz</a>
        <a href="{{ route('quiz.results') }}"><i class="fas fa-chart-bar me-2"></i>Lihat Hasil Kuiz</a>

        <form method="POST" action="{{ route('logout') }}" class="px-3 mt-4">
            @csrf
            <button type="submit" class="btn btn-outline-light w-100">
                <i class="fas fa-sign-out-alt me-1"></i> Logout
            </button>
        </form>
    </div>

    <!-- Main Content -->
    <div class="main-content">
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
