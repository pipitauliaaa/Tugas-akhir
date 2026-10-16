
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimController;

Route::get('/', [TimController::class, 'home'])->name('home');
Route::get('/layanan', [TimController::class, 'layanan'])->name('layanan');
Route::get('/tim', [TimController::class, 'index'])->name('tim');
Route::get('/tim/{id}', [TimController::class, 'show'])->name('tim.detail');
Route::get('/kontak', [TimController::class, 'kontak'])->name('kontak');
