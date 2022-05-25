<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name("site.home");

Route::get('/login', [LoginController::class, 'login'])->name("site.login");
Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name("site.redirectToGoogle");
Route::get('/google/callback', [LoginController::class, 'handleLoginGoogle'])->name("site.handleLoginGoogle");
Route::get('/facebook/callback', [LoginController::class, 'handleLoginFacebook'])->name("site.handleLoginFacebook");
Route::post('/login', [LoginController::class, 'handleLogin'])->name("site.handleLogin");
Route::delete('/logout', [LoginController::class, 'logout'])->name("site.logout");
Route::get('/register', [RegisterController::class, 'register'])->name("site.register");
Route::post('/register', [RegisterController::class, 'handleRegister'])->name("site.handleRegister");
Route::get('/profile', [UserController::class, 'profile'])->name("site.user.profile");
Route::get('/email/verifyUser', [RegisterController::class, 'verifyEmail'])->name('verification.verifyUser');
