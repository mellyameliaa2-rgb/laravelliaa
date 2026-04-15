<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::Class, 'login'])->name('login.post'); 

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');
});

Route::middleware(['auth', 'role:User'])->group(function () {
    Route::get('/user/dashboard', [UserDashboardController::class, 'user'])
        ->name('user.dashboard');
});

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::POST('/kelas/store', [KelasController::class, 'store'])->name('kelas.store');

// Route khusus halaman konfirmasi hapus dan edit
Route::resource('kelas', KelasController::class)->except(['edit', 'update', 'destroy']);
Route::get('kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
Route::get('kelas/{id}/hapus', [KelasController::class, 'hapus'])->name('kelas.hapus');
Route::delete('kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');

Route::resource('siswa', SiswaController::class)->except(['edit', 'update', 'destroy']);
Route::get('siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::get('siswa/{id}/hapus', [SiswaController::class, 'hapus'])->name('siswa.hapus');
Route::delete('siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
