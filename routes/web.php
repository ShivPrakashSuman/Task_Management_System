<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\dashboardController;

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
Auth::routes();

Route::get('/user', function () {
    return view('welcome');
});

//  Authentication Routes...
    Route::get('login', [LoginController::class,'showlogin'])->name('login');
    Route::post('/loginStore', [LoginController::class, 'loginStore'])->name('login.store');
    Route::post('logout', [LoginController::class,'logout'])->name('logout');
    Route::get('register', [RegisterController::class,'showRegister'])->name('register');
    Route::post('/registerStore', [RegisterController::class, 'create'])->name('register.store');
//  logged in! ...
    Route::get('dashboard',[dashboardController::class,'index'])->name('dashboard');
