<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeneratePDF;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VerifyEmailController;
use Illuminate\Support\Facades\Route;


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


Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/zapomenute-heslo', [PasswordController::class, 'forgottenPassword'])->name('forgotten-password');

Route::get("/pdf", [GeneratePDF::class, "generate"])->name("pdf-generate");

// Email verification
Route::middleware('auth')->group(function () {
    Route::get('/email/verify', [VerifyEmailController::class, "verifyShow"])->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, "verify"])->middleware(
        'signed'
    )->name('verification.verify');

    Route::post('/email/verification-notification', [VerifyEmailController::class, "verifyNotification"])->middleware(
        'throttle:6,1'
    )->name('verification.send');
});


// Application routes
Route::get('/', [IndexController::class, "index"]);

Route::middleware(["auth", "verified"])->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");
});
