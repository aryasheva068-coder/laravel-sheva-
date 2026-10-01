@extends('layouts.page.app')

@section('title', 'Profile Mahasiswa - Unpam')

@section('content')
<div class="container flex-grow-1 d-flex align-items-center justify-content-center py-5">
    <div class="col-12 col-md-8 col-lg-5">
        <div class="card profile-card shadow-lg">
            <div class="profile-header-bg"></div>

            <div class="card-body text-center pt-0 px-4 pb-4">
                <div class="profile-avatar-wrapper mb-3">
                    <img src="{{ asset('propertis/wallpapers.jpg') }}" alt="Foto Profil"
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
@endsection