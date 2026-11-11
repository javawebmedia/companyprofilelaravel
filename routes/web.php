<?php

use Illuminate\Support\Facades\Route;
// login controller
use App\Http\Controllers\LoginController;

// Homepage front end
Route::get('/', [LoginController::class, 'index']);
// routes login
Route::get('/login', [LoginController::class, 'index']);
Route::post('login/proses', [LoginController::class, 'proses']);
Route::get('login/logout', [LoginController::class, 'logout']);
Route::get('logout', [LoginController::class, 'logout']);
Route::get('reset', [LoginController::class, 'reset']);
Route::post('login/proses-reset', [LoginController::class, 'prosesReset']);
Route::get('ganti-password/{token}', [LoginController::class, 'gantiPassword'])->name('reset.password');
Route::post('proses-ganti-password', [LoginController::class, 'prosesGantiPassword']);
Route::post('refresh-chaptcha', [LoginController::class, 'refreshChaptcha']);
