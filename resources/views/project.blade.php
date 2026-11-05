@extends('layouts.page.app')

@section('title', 'My Projects')

@section('content')
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold">My Projects</h1>
        </div>

        <div class="row g-4">
            @foreach ($projects as $project)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <!-- Perhatikan: kita pakai folder 'upload/' -->
                    @if($project->image)
                        <img src="{{ asset('upload/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}" style="height: 200px; object-fit: cover;">
                    @else
                        <div class="bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 200px;">
                            No Image
                        </div>
                    @endif

                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $project->title }}</h5>
                        <p class="card-text text-muted small">
                            {{ Str::limit($project->description, 80) }}
                        </p>
                        <p class="card-text small">
                            <strong>Tech:</strong> {{ $project->teknologi }}
                        </p>
                    </div>
                    
                    <div class="card-footer bg-white border-0 pb-3">
                        <a href="{{ url('/project/' . $project->id) }}" class="btn btn-primary w-100">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex flex-column align-items-center mt-5">
            <div class="mb-2 text-muted">
                Showing {{ $projects->firstItem() }} to {{ $projects->lastItem() }} of {{ $projects->total() }} results
            </div>
            <div>
                {{ $projects->onEachSide(1)->links('pagination::simple-bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection