<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Admin
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\PesertaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/store', [HomeController::class, 'store'])->name('store');

Route::prefix('/admin')
      ->group(function() {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/peserta/report', [DashboardController::class, 'report'])->name('report');
        Route::resource('/peserta', PesertaController::class);
    });
