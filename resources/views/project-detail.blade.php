@extends('layouts.page.app')

@section('title', $project->title . ' - UNPAM')

@section('content')
<div class="container py-5">

    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">{{ $project->title }}</li>
        </ol>
    </nav>

    <div class="row g-4">
        <div class="col-lg-6">
            <img src="{{ asset('images/' . $project->image) }}"
                 class="img-fluid rounded shadow-sm" alt="{{ $project->title }}">
        </div>
        <div class="col-lg-6">
            <h2 class="fw-bold mb-3">{{ $project->title }}</h2>
            <p class="text-muted">{{ $project->description }}</p>

            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Kategori</strong> <span>{{ $project->status }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Teknologi</strong> <span>{{ $project->teknologi }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Tahun</strong> <span>{{ $project->tahun }}</span>
                </li>
            </ul>

            <a href="{{ url('/') }}" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>
    </div>

</div>
@endsection