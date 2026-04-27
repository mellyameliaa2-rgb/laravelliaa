<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\UserKelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserSiswaController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserDashboardController::class, 'user'])
        ->name('user.dashboard');
});



Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/siswa', [UserSiswaController::class, 'index'])
        ->name('user.siswa.index');
});
Route::get('/user/kelas', [UserKelasController::class, 'index'])
    ->name('user.kelas.index');



Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/siswa', [SiswaController::class, 'index'])
        ->name('siswa.index');

    Route::get('/siswa/create', [SiswaController::class, 'create'])
        ->name('siswa.create');

    Route::post('/siswa/store', [SiswaController::class, 'store'])
        ->name('siswa.store');

    Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])
        ->name('siswa.edit');

    Route::put('/siswa/{id}', [SiswaController::class, 'update'])
        ->name('siswa.update');

    Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])
        ->name('siswa.destroy');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/kelas', [KelasController::class, 'index'])
        ->name('kelas.index');
});

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/kelas/create', [KelasController::class, 'create'])
        ->name('kelas.create');

    Route::post('/kelas/store', [KelasController::class, 'store'])
        ->name('kelas.store');

    Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])
        ->name('kelas.edit');

    Route::put('/kelas/{id}', [KelasController::class, 'update'])
        ->name('kelas.update');

    Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])
        ->name('kelas.destroy');
});