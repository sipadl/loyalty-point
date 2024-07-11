<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoyaltyController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [LoyaltyController::class, 'index'])->name('loyalty.index');
Route::get('/coupon', [LoyaltyController::class, 'coupon'])->name('loyalty.coupon');
Route::get('/history', [LoyaltyController::class, 'riwayat'])->name('loyalty.history');
Route::post('/loyalty/scan', [LoyaltyController::class, 'scan'])->name('loyalty.scan');

Route::middleware(['auth'])->group(function () {
Route::get('/user', [UserController::class, 'index'])->name('loyalty.user');
Route::get('/user/profile', [UserController::class, 'profile'])->name('loyalty.profile');
Route::get('/user/setting_password', [UserController::class, 'setting_password'])->name('loyalty.settings.password');
Route::get('/user/logout', [UserController::class, 'logout'])->name('loyalty.logout');
});


Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
