<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Client\DetailController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/email/verify', function () {
  return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (Request $request,) {
  User::where('id', $request->id)->update(['email_verified_at' => date(now())]);

  session()->flash('success', 'Email verification successfull. Please login!');

  return redirect('login');
})->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
  $request->user()->sendEmailVerificationNotification();

  return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Login/Logout
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/logout', [LoginController::class, 'logoutNotFound']);

// Forgot / Reset Password
Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot-password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'requestLink'])->name('request-link');

Route::get('/reset-password/{token}', function (string $token) {
  return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->middleware('guest')->name('password.update');

// Detail
Route::get('/detail/{slug}', [DetailController::class, 'index'])->name('detail');

// Checkout
Route::get('/checkout/{id}', [CheckoutController::class, 'index'])->name('checkout')->middleware(['auth', 'verified']);

Route::post('/checkout/{id}', [CheckoutController::class, 'proccess'])->name('checkout-proccess')->middleware(['auth', 'verified']);

Route::post('/checkout/create/{detail_id}', [CheckoutController::class, 'create'])->name('checkout-create')->middleware(['auth', 'verified']);

Route::get('/checkout/remove/{detail_id}', [CheckoutController::class, 'remove'])->name('checkout-remove')->middleware(['auth', 'verified']);

Route::get('/checkout/success/{detail_id}', [CheckoutController::class, 'success'])->name('checkout-success')->middleware(['auth', 'verified']);

// Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
Route::prefix('admin')
  ->middleware(['auth', 'admin'])
  ->group(function() {
      Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

      Route::resource('travel-package', TravelPackageController::class);

      Route::resource('gallery', GalleryController::class);

      Route::resource('transaction', TransactionController::class);
  });
