<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel | MyProfile')</title>
    
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- DataTables CSS (Tambahan untuk Tabel) -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    
    <style>
        /* Reset dasar */
        body { margin: 0; padding: 0; background-color: #f4f6f9; font-family: Arial, sans-serif; }

        /* Navbar Fixed */
        .navbar { height: 56px; }

        /* Sidebar melayang di kiri */
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            position: fixed;
            top: 56px;
            left: 0;
            height: calc(100vh - 56px);
            overflow-y: auto;
            z-index: 100;
        }

        .sidebar h5 {
            padding: 15px;
            margin: 0;
            border-bottom: 1px solid #4b545c;
            text-align: center;
            font-size: 1.1rem;
        }

        .sidebar a {
            display: block;
            color: #c2c7d0;
            padding: 12px 20px;
            text-decoration: none;
            border-bottom: 1px solid #4b545c;
            font-size: 14px;
        }

        .sidebar a:hover {
            background-color: #494e53;
            color: white;
        }

        /* AREA KONTEN */
        .main-content {
            margin-left: 250px;
            padding-top: 56px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content-area {
            flex: 1;
            padding: 25px;
        }

        .content-box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

    <!-- Navbar Atas -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top shadow-sm px-3">
        <div class="container-fluid">
            
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px; object-fit: contain;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('home') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar Kiri -->
    <div class="sidebar shadow-sm">
        <h5>Admin Menu</h5>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.projects') }}">Data Project</a>
    </div>

    <!-- Area Konten Kanan -->
    <div class="main-content">
        
        <div class="content-area">
            <div class="content-box">
                @yield('content')
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-3">
            <p class="mb-0">&copy; 2026 MyProfile. All rights reserved.</p>
        </footer>

    </div>

    <!-- jQuery (Wajib untuk DataTables) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <!-- TAMBAHKAN INI: Untuk memanggil script dari halaman index.blade.php -->
    @stack('scripts')

</body>
</html>