<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/user', function () {
    return view('welcome');
});


// Authentication Routes...
Route::get('login', [LoginController::class,'showlogin'])->name('login');
Route::post('/loginStore', [LoginController::class, 'loginStore'])->name('login.store');
Route::get('dashboard',[LoginController::class,'dashboard'])->name('dashboard');
Route::post('logout', [LoginController::class,'logout'])->name('logout');
// Registration Routes...
Route::get('register', [RegisterController::class,'register'])->name('register');
Route::post('/store', [RegisterController::class, 'create'])->name('register.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');