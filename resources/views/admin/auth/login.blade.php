<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- PAKAI BOOTSTRAP ONLINE (CDN) AGAR LANGSUNG RAPI -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            /* Background gambar gedung UNPAM */
            background-image: url('{{ asset('images/unpam.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            background-color: #ffffff;
        }

        .login-header {
            background-color: #ffc107; /* Warna kuning */
            color: #333;
            text-align: center;
            padding: 15px;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .btn-login {
            background-color: #ffc107;
            color: #333;
            font-weight: bold;
            border: none;
        }
        
        .btn-login:hover {
            background-color: #e0a800;
        }
    </style>
</head>
<body>

    <div class="login-card">
        
        <!-- Header Kuning -->
        <div class="login-header">
            Admin Login
        </div>
        
        <div class="card-body p-4">
            
            <!-- Pesan Error jika login gagal -->
            @if($errors->any())
                <div class="alert alert-danger p-2 text-center" style="font-size: 0.9rem;">
                    {{ $errors->first() }}
                </div>
            @endif

            <!-- Form Login -->
            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
                </div>
                
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                </div>
                
                <button type="submit" class="btn btn-login w-100 py-2">Login</button>
            </form>

            <div class="text-center mt-4" style="font-size: 0.85rem; color: #6c757d;">
                Demo Login : admin@example.com / password
            </div>

        </div>
    </div>

</body>
</html>