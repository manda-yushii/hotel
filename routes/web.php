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

Route::get('/hotel', function () {
    return view('hotel');
});

Route::get('/kamar', function () {
    return view('kamar');
});

Route::get('/survei', function () {
    return view('survei');
});

Route::get('/hasil', function () {
    return view('hasil');
});

use App\Http\Controllers\RoleController;

Route::get('/pengguna', [RoleController::class, 'index'])
    ->name('pengguna.index');

Route::get('/profile', function () {
    return view('profile');
});

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');