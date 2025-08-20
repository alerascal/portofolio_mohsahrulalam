<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Welcome page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Dashboard (protected by auth middleware)
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');  // Menampilkan daftar proyek
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');  // Form untuk membuat proyek baru
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');  // Menyimpan proyek baru
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');  // Menampilkan detail proyek
Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');  // Form untuk mengedit proyek
Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');  // Menyimpan perubahan proyek
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');  // Menghapus proyek