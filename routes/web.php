<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [BeritaController::class, 'showcontentindex']);
Route::get('/index', [BeritaController::class, 'showcontentindex']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/superadmin', [SuperAdminController::class,'index']);

// Route::get('/admin', function () {
//     return view('admin');
// });

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/calculator', function () {
    return view('pages.calculator-app');
});

Route::get('/watch-list', function () {
    return view('pages.watch-list');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});




// Route::get('/create-article', function () {
//     return view('pages.admin-create-article');
// });

// Route::get('/show-article', function () {
//     return view('pages.admin-show-article');
// });

Route::get('/create-article', [BeritaController::class, 'create']);
Route::get('/show-article', [BeritaController::class, 'index']);
Route::post('/store-article', [BeritaController::class, 'store']);

Route::get('/edit-article/{id}', [BeritaController::class, 'edit']);

Route::get('/hapus-article/{id}', [BeritaController::class, 'delete']);

Route::put('/update-article/{id}', [BeritaController::class, 'update']);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
