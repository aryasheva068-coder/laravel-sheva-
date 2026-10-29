@extends('admin.template')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-3 py-3">
            <h1>Tambah Project</h1>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <!-- PERHATIKAN BARIS ACTION INI -->
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Nama Project</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan nama project" required>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option value="active">Active</option>
                                    <option value="selesai">Selesai</option>
                                    <option value="in progress">In Progress</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Masukkan deskripsi project"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="teknologi" class="form-label">Teknologi</label>
                                <input type="text" class="form-control" id="teknologi" name="teknologi" placeholder="Contoh: Laravel, Bootstrap" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input class="form-control" type="file" id="image" name="image" accept="image/*">
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('admin.projects') }}" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection