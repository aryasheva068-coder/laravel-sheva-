<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminProjectController;

// --- ROUTE PUBLIC (Frontend) ---

// Halaman utama = Profile (Sesuai Video Dosen)
Route::get('/', function () {
    return view('profile');
})->name('home');

// Halaman Daftar Project
Route::get('/project', [ProjectController::class, 'index'])->name('project');

// Halaman Detail Project
Route::get('/project/{id}', [ProjectController::class, 'detail']);

// Halaman Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Halaman About
Route::get('/about', function () {
    return view('about'); 
});


// --- ROUTE ADMIN ---
Route::prefix('admin')->group(function () {
    // Halaman Dashboard Admin
    Route::get('/', function () { return view('admin.home'); })->name('admin.dashboard');
    
    // CRUD Projects
    Route::get('/projects', [AdminProjectController::class, 'index'])->name('admin.projects');
    Route::get('/projects/create', [AdminProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('/projects', [AdminProjectController::class, 'store'])->name('admin.projects.store');
    
    // Edit & Hapus
    Route::get('/projects/{id}/edit', [AdminProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/projects/{id}', [AdminProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/projects/{id}', [AdminProjectController::class, 'destroy'])->name('admin.projects.destroy');
});