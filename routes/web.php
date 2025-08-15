<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\InformasiRequestController;

use App\Http\Controllers\ProyekController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/profile', [HomeController::class, 'profile'])->name('home.profile');
Route::get('/operasional', [HomeController::class, 'operasional'])->name('home.operasional');
Route::get('/publikasi', [HomeController::class, 'publikasi'])->name('home.publikasi');
Route::get('/k3', [HomeController::class, 'k3'])->name('home.k3');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('home.layanan');

Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');




Route::middleware(['roles'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('gallery', GalleryController::class);
    Route::resource('news', NewsController::class)->except(['show']);
    Route::resource('manager', ManagerController::class);
    Route::get('/informasi', [InformasiRequestController::class, 'index'])->name('informasi.index');
    Route::resource('proyek',ProyekController::class);
    Route::resource('users',UserController::class);



});

Route::post('/informasi', [InformasiRequestController::class, 'store'])->name('informasi.store');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

