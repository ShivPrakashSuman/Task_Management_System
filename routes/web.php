<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\accountManageController;
use App\Http\Controllers\taskController;
use App\Http\Controllers\UserController;
/*
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

//  Authentication Routes...
    Route::get('/login_register', [RegisterController::class,'showLoginRegister'])->name('login_register');
    Route::post('/registerStore', [RegisterController::class, 'create'])->name('register.store');
    Route::post('/loginStore', [LoginController::class, 'loginStore'])->name('login.store');
    Route::post('logout', [LoginController::class,'logout'])->name('logout');

// logged in ! ...

    Route::get('dashboard',[dashboardController::class,'index'])->name('dashboard');
    // crud
    Route::resource('task','App\Http\Controllers\taskController')->middleware('auth');
    Route::get('/changeStatus', [taskController::class,'changeStatus'])->name('changeStatus')->middleware('auth');
   //profile
    Route::resource('account','App\Http\Controllers\accountManageController')->middleware('auth');

    //seeting
    Route::resource('setting','App\Http\Controllers\settingController')->middleware('auth');
  // User
    Route::resource('User','App\Http\Controllers\UserController')->middleware('auth');
