<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa - Unpam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .profile-card { border: none; border-radius: 16px; overflow: hidden; }
        .profile-header-bg { background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%); height: 100px; }
        .profile-avatar-wrapper { margin-top: -60px; }
        .profile-avatar { width: 110px; height: 110px; object-fit: cover; border: 4px solid #ffffff; }
        .info-list-item { border-bottom: 1px dashed #e9ecef; padding-bottom: 12px; margin-bottom: 12px; }
        .info-list-item:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
    </style>
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a href="#" class="navbar-brand fw-bold d-flex align-items-center gap-2">
                <i class="bi bi-mortarboard-fill fs-4"></i> Unpam - Profile Mahasiswa
            </a>
        </div>
    </nav>

    <div class="container flex-grow-1 d-flex align-items-center justify-content-center py-5">
        <div class="col-12 col-md-8 col-lg-5">
            <div class="card profile-card shadow-lg">
                <div class="profile-header-bg"></div>

                <div class="card-body text-center pt-0 px-4 pb-4">
                    <div class="profile-avatar-wrapper mb-3">
                        <img src="{{ asset('propertis/wallpapers.jpg') }}" alt="Foto profil mahasiswa pada halaman profil Unpam; subjek utama ditampilkan dalam suasana formal dengan latar belakang sederhana"
                            class="rounded-circle profile-avatar shadow">
                    </div>

                    <h4 class="fw-bold mb-1">{{ $mahasiswa['nama'] }}</h4>
                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-1 mb-4">
                        <i class="bi bi-check-circle-fill me-1"></i> Mahasiswa Aktif
                    </span>

                    <div class="card bg-body-tertiary border-0 rounded-4 p-3 text-start">
                        <div class="info-list-item d-flex align-items-center justify-content-between">
                            <span class="text-muted"><i class="bi bi-card-heading me-2 text-primary"></i>NIM</span>
                            <span class="fw-semibold text-dark">{{ $mahasiswa['nim'] }}</span>
                        </div>
                        <div class="info-list-item d-flex align-items-center justify-content-between">
                            <span class="text-muted"><i class="bi bi-journal-bookmark me-2 text-primary"></i>Prodi</span>
                            <span class="fw-semibold text-dark">{{ $mahasiswa['prodi'] }}</span>
                        </div>
                        <div class="info-list-item d-flex align-items-center justify-content-between">
                            <span class="text-muted"><i class="bi bi-envelope me-2 text-primary"></i>Email</span>
                            <span class="fw-semibold text-dark">{{ $mahasiswa['email'] }}</span>
                        </div>
                    </div>
                </div>

                <div class="card-footer bg-white border-top-0 text-center pb-4 pt-0">
                    <button class="btn btn-outline-primary btn-sm rounded-pill px-4">
                        <i class="bi bi-pencil-square me-1"></i> Edit Profil
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>