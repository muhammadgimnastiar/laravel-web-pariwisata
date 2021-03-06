<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/calculator', function () {
    return view('pages.calculator-app');
});

Route::get('/watch-list', function () {
    return view('pages.watch-list');
});


Route::get('/create-article', function () {
    return view('pages.admin-create-article');
});

Route::get('/show-article', function () {
    return view('pages.admin-show-article');
});



