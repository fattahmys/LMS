<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HasMiddleware;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\Buat_tugasController;
// use App\Http\Middleware\AdminMiddleware;


// Route::get('/', function () {
//     return view('welcome'); 
// });
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
    Route::post('kelas', [KelasController::class, 'store'])->name('kelas.store');
    Route::get('/kelas/{id}', [KelasController::class, 'show'])->name('kelas.show');
    Route::get('/buat_tugas', [Buat_tugasController::class, 'index'])->name('buat_tugas');
    Route::get('/', function () { return view('beranda', ['title' => 'Dashboard']); })->name('dashboard');
    Route::get('/peserta', function () { return view('peserta', ['title' => 'Peserta']); })->name('peserta');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/matapelajaran', function () { return view('matapelajaran', ['title' => 'Mata Pelajaran']); })->name('matapelajaran');
    
});
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    // Rute untuk halaman pendaftaran
    Route::get('/register', [RegisteredUserController::class, 'create'])
    ->name('register');
    
    // Rute untuk menyimpan data pendaftaran
    Route::post('/register', [RegisteredUserController::class, 'store']);
    // Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
