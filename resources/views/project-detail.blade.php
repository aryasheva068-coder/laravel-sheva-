@extends('layouts.page.app')

@section('title', $project->title . ' - My Profile')

@section('content')
    <div class="container py-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">{{ $project->title }}</li>
            </ol>
        </nav>

        <div class="row g-4">
            <!-- Kolom Kiri: Gambar -->
            <div class="col-lg-6">
                @if($project->image)
                    <img src="{{ asset('upload/' . $project->image) }}" class="img-fluid rounded shadow-sm" alt="{{ $project->title }}">
                @else
                    <div class="bg-secondary text-white d-flex align-items-center justify-content-center rounded" style="height: 300px;">
                        Gambar Tidak Tersedia
                    </div>
                @endif
            </div>

            <!-- Kolom Kanan: Informasi -->
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">{{ $project->title }}</h2>
                <p class="text-muted">{{ $project->description }}</p>

                <ul class="list-group list-group-flush mb-4">
                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Status</strong> 
                        <span>{{ $project->status }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Teknologi</strong> 
                        <span>{{ $project->teknologi }}</span>
                    </li>
                </ul>

                <a href="{{ url('/project') }}" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left"></i> Kembali ke Daftar Project
                </a>
            </div>
        </div>
    </div>
@endsection