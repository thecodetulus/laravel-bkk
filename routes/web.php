<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\MitraController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/dashboard', function () {
    return view('layouts.main');
});

Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');
Route::get('/mitra', [MitraController::class, 'index'])->name('mitra.index');
Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
Route::get('/lowongan', [LowonganController::class, 'index'])->name('lowongan.index');

Route::resource('/jurusan', JurusanController::class);
Route::resource('/mitra', MitraController::class);
Route::resource('/lowongan', LowonganController::class);