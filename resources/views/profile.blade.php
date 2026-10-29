@extends('layouts.page.app')

@section('title', 'Profile - MyProfile')

@section('content')
    <div class="container py-5 text-center">
        <h1 class="display-5 mb-4">Halo, Saya Arya Sheva</h1>

        <!-- Foto Profil (Pastikan gambar ada di public/images/profile.jpg) -->
        <div class="mb-4">
            <img src="{{ asset('images/profile.jpg') }}" alt="Foto Profil" class="rounded-circle shadow" style="width: 200px; height: 200px; object-fit: cover;">
        </div>

        <!-- Deskripsi Singkat -->
        <p class="lead text-muted">Saya seorang Web Developer yang passionate dalam membuat aplikasi web modern.</p>

        <hr class="my-4">

        <p class="mb-4">Selamat datang di portofolio website saya. Saya memiliki pengalaman dalam Laravel, Bootstrap, dan berbagai teknologi web lainnya.</p>

        <!-- Tombol Menuju Project -->
        <a href="{{ url('/project') }}" class="btn btn-primary btn-lg">Lihat Projects</a>
    </div>
@endsection