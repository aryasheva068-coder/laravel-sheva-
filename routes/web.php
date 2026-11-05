<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\Auth\AdminAuthController;

// --- ROUTE PUBLIC (Frontend) ---
Route::get('/', function () { return view('profile'); })->name('home');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/project/{id}', [ProjectController::class, 'detail']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/about', function () { return view('about'); });


// --- ROUTE LOGIN ADMIN (Bisa diakses tanpa login) ---
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');


// --- ROUTE ADMIN (Dikunci, wajib login dulu) ---
Route::prefix('admin')->middleware('auth')->group(function () {
    
    // Dashboard Admin
    Route::get('/', function () { return view('admin.home'); })->name('admin.dashboard');
    
    // CRUD Projects
    Route::get('/projects', [AdminProjectController::class, 'index'])->name('admin.projects');
    Route::get('/projects/create', [AdminProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('/projects', [AdminProjectController::class, 'store'])->name('admin.projects.store');
    
    // Edit & Hapus
    Route::get('/projects/{id}/edit', [AdminProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/projects/{id}', [AdminProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/projects/{id}', [AdminProjectController::class, 'destroy'])->name('admin.projects.destroy');

    // Logout
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});