<?php

use App\Models\Post;
use App\Models\User;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;


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
    return view('home', [
        "title" => "Home & Lifestyle",
        "posts" => Post::all()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/gender', function () {
    return view('gender', [
        "title" => "Gender"
    ]);
});

Route::get('/pria', function () {
    return view('pria', [
        "title" => "Pria"
    ]);
});

Route::get('/wanita', function () {
    return view('wanita', [
        "title" => "Wanita"
    ]);
});

Route::get('/anak', function () {
    return view('anak', [
        "title" => "Kids"
    ]);
});

Route::get('/cewebaju', function () {
    return view('cewebaju', [
        "title" => "Baju"
    ]);
});

Route::get('/celanawanita', function () {
    return view('celanawanita', [
        "title" => "Celana"
    ]);
});
Route::get('/sepatuwanita', function () {
    return view('sepatuwanita', [
        "title" => "Sepatu"
    ]);
});




Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/post', DashboardPostController::class)->middleware('auth');