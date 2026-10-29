@extends('admin.template')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-3 py-3">
            <h1>Edit Project</h1>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Nama Project</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="active" {{ $project->status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="selesai" {{ $project->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                    <option value="in progress" {{ $project->status == 'in progress' ? 'selected' : '' }}>In Progress</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ $project->description }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="teknologi" class="form-label">Teknologi</label>
                                <input type="text" class="form-control" id="teknologi" name="teknologi" value="{{ $project->teknologi }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image (Biarkan kosong jika tidak ingin mengubah gambar)</label>
                                <input class="form-control" type="file" id="image" name="image" accept="image/*">
                                @if($project->image)
                                    <img src="{{ asset('upload/' . $project->image) }}" class="mt-2 img-thumbnail" style="max-width: 100px;">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('admin.projects') }}" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection