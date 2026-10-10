@extends('layouts.page.app')

@section('title', 'Portfolio Project - UNPAM')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold">Portofolio Project</h2>
        <p class="text-muted">Daftar project yang pernah dikerjakan oleh mahasiswa</p>
    </div>

    <div class="row g-4">
        @foreach ($projects as $project)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">

                <img src="{{ asset('images/' . $project->image) }}"
                     class="card-img-top"
                     alt="{{ $project->title }}"
                     style="height: 200px; object-fit: cover;">

                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $project->title }}</h5>
                </div>

                <div class="card-footer bg-white border-0 text-center pb-3">
                    <a href="{{ url('/project/' . $project->id) }}" class="btn btn-primary btn-sm">
                        Detail Project
                    </a>
                </div>

            </div>
        </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-5">
        {{ $projects->links('pagination::bootstrap-5') }}
    </div>

</div>
@endsection