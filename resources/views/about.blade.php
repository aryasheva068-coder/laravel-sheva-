@extends('layouts.page.app')

@section('title', 'About - Unpam')

@section('content')
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold">About Us</h1>
            <p class="text-muted">Halaman ini berisi informasi tentang proyek ini.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3">Tentang Kami</h4>
                        <p>Proyek ini dibuat untuk memenuhi project  mata kuliah Rekayasa Web.</p>
                        <p>Aplikasi ini menggunakan Framework <strong>Laravel</strong> dan <strong>Bootstrap 5</strong> untuk tampilannya.</p>
                        <hr>
                        <p class="mb-0"><strong>Nama:</strong> Arya Sheva Al-Aliyyu</p>
                        <p class="mb-0"><strong>NIM:</strong> 251011700400</p>
                        <p class="mb-0"><strong>Prodi:</strong> Sistem Informasi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection