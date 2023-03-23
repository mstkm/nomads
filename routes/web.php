<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Client\DetailController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail', [DetailController::class, 'index'])->name('detail');

// Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
Route::prefix('admin')
  ->group(function() {
      Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
  });