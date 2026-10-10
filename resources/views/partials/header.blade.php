<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Profile Mahasiswa - Unpam')</title>
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
            <a href="{{ url('/') }}" class="navbar-brand fw-bold d-flex align-items-center gap-2">
                <i class="bi bi-mortarboard-fill fs-4"></i> Unpam - Profile Mahasiswa
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ url('/profile') }}" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/project') }}" class="nav-link">project</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/about') }}" class="nav-link">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>