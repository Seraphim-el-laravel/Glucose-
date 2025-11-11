<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\AdminGejalaController;
use App\Http\Controllers\AdminPasienController;
use App\Http\Controllers\AdminPenyakitController;
use App\Http\Controllers\AdminUserController;


use App\Http\Controllers\ScreeningController;

Route::get('/', function () {
    return view('index');
});

Route::get('/screening', [ScreeningController::class, 'index']);
Route::post('/result', [ScreeningController::class, 'store']);

Route::get('/login', function () {
    return view('admin.auth.login');
})->name('login');

Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::prefix('/admin')->middleware('auth')->group (function () {
    Route::get('/dashboard', function () {
        return view('admin.layouts.wrapper');
        // return view('index');
    });

    Route::get('/dashboard', [AdminDashboard::class, 'index']
    )->name('admin.dashboard');
    Route::resource('/user', AdminUserController::class);
    Route::resource('/gejala', AdminGejalaController::class);
    Route::resource('/penyakit', AdminPenyakitController::class);
    Route::resource('/pasien', AdminPasienController::class);

});
