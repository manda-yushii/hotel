<?php

use Illuminate\Support\Facades\Route;

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
| ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
});

//Hotel
use App\Http\Controllers\HotelController;

Route::get('/hotel', [HotelController::class, 'index'])
    ->name('hotel.index');
Route::post('/hotel', [HotelController::class, 'store'])
    ->name('hotel.store');
Route::put('/hotel/{hotel}', [HotelController::class, 'update'])
    ->name('hotel.update');
Route::delete('/hotel/{hotel}', [HotelController::class, 'destroy'])
    ->name('hotel.destroy');

//Kamar
use App\Http\Controllers\KamarController;

Route::get('/kamar', [KamarController::class, 'index'])
    ->name('kamar.index');
Route::post('/kamar', [KamarController::class, 'store'])
    ->name('kamar.store');
Route::put('/kamar/{kamar}', [KamarController::class, 'update'])
    ->name('kamar.update');
Route::delete('/kamar/{kamar}', [KamarController::class, 'destroy'])
    ->name('kamar.destroy');

use App\Http\Controllers\SurveiController;
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

use App\Http\Controllers\RoleController;

//Pengguna
use App\Http\Controllers\PenggunaController;

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
});

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
