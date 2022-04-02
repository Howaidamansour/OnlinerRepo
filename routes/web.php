<?php

use Illuminate\Support\Facades\Route;

// User Routes

Route::get('/login1', 'App\Http\Controllers\UserController@showLoginForm')->name('showLoginForm');

Route::post('/login2', 'App\Http\Controllers\UserController@login')->name('login');

Route::get('/register1', 'App\Http\Controllers\UserController@showRegisterForm')->name('showRegisterForm');

Route::post('/register2', 'App\Http\Controllers\UserController@register')->name('register');