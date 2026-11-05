@extends('admin.template')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-3 py-3">
            <h1>Data Projects</h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Tambah Project</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <table id="dataTable" class="table table-bordered table-striped w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Teknologi</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <!-- Perhatikan: kita pakai folder 'upload/' -->
                                @if($project->image)
                                    <img src="{{ asset('upload/' . $project->image) }}" alt="{{ $project->title }}" class="img-thumbnail" style="max-width: 80px;">
                                @else
                                    <span class="badge bg-secondary">No Image</span>
                                @endif
                            </td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->teknologi }}</td>
                            <td>{{ $project->description }}</td>
                            <td>
                                <span class="badge {{ $project->status == 'active' || $project->status == 'selesai' ? 'bg-success' : 'bg-warning text-dark' }}">
                                    {{ $project->status }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-warning d-block mb-1">Edit</a>
                                
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-block" onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger w-100">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endpush