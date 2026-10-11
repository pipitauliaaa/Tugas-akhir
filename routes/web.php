<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgencyController;

Route::get('/', [AgencyController::class, 'home'])->name('home');
Route::get('/layanan', [AgencyController::class, 'layanan'])->name('layanan');
Route::get('/tim', [AgencyController::class, 'tim'])->name('tim');
Route::get('/kontak', [AgencyController::class, 'kontak'])->name('kontak');

