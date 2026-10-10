<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MahasiswaController;

// Halaman utama = Portofolio Project
Route::get('/', [ProjectController::class, 'index']);

// Detail project
Route::get('/project/{id}', [ProjectController::class, 'detail']);

// Halaman mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// Detail project
Route::get('/project/{id}', [ProjectController::class, 'detail']);