<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/pet', function () {
    return view('pet');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/select', function () {
    return view('select');
});