<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SurveiController;

/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/

Route::view('/', 'user.home')->name('home');

Route::view('/user/hotel', 'user.hotel')->name('user.hotel');

Route::view('/user/hotel/detail', 'user.detail-hotel')->name('user.hotel.detail');

Route::view('/user/survey', 'user.survey')->name('user.survey');

Route::view('/user/about', 'user.about')->name('user.about');

Route::view('/contact', 'user.contact')->name('user.contact');

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login'])
    ->name('login.attempt');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register'])
    ->name('register.attempt');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

/*
|--------------------------------------------------------------------------
| ADMIN (wajib login)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/hotel', [HotelController::class, 'index'])
        ->name('hotel.index');
    Route::post('/hotel', [HotelController::class, 'store'])
        ->name('hotel.store');
    Route::put('/hotel/{hotel}', [HotelController::class, 'update'])
        ->name('hotel.update');
    Route::delete('/hotel/{hotel}', [HotelController::class, 'destroy'])
        ->name('hotel.destroy');

    Route::get('/kamar', [KamarController::class, 'index'])
        ->name('kamar.index');
    Route::post('/kamar', [KamarController::class, 'store'])
        ->name('kamar.store');
    Route::put('/kamar/{kamar}', [KamarController::class, 'update'])
        ->name('kamar.update');
    Route::delete('/kamar/{kamar}', [KamarController::class, 'destroy'])
        ->name('kamar.destroy');

    Route::get('/survei', [SurveiController::class, 'create'])
        ->name('survei.create');
    Route::post('/survei', [SurveiController::class, 'store'])
        ->name('survei.store');

    Route::get('/hasil', [SurveiController::class, 'index'])
        ->name('hasil.index');
    Route::put('/hasil/{survei}', [SurveiController::class, 'update'])
        ->name('hasil.update');
    Route::delete('/hasil/{survei}', [SurveiController::class, 'destroy'])
        ->name('hasil.destroy');

    Route::get('/pengguna', [PenggunaController::class, 'index'])
        ->name('pengguna.index');
    Route::post('/pengguna', [PenggunaController::class, 'store'])
        ->name('pengguna.store');
    Route::put('/pengguna/{user}', [PenggunaController::class, 'update'])
        ->name('pengguna.update');
    Route::delete('/pengguna/{user}', [PenggunaController::class, 'destroy'])
        ->name('pengguna.destroy');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

});