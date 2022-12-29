<?php

use App\Models\Post;
use App\Models\User;


use App\Models\Category;
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
        "title" => "home",
        "posts" => Post::all()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/category', function () {
    return view('category', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});



// Route::get('/wanita', function () {
//     return view('wanita', [
//         "title" => "Waita"
//     ]);
// });

// Route::get('/pria', function () {
//     return view('pria', [
//         "title" => "Pria"
//     ]);
// });
// Route::get('/anak', function () {
//     return view('anak', [
//         "title" => "Anak"
//     ]);
// });




Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/post', DashboardPostController::class)->middleware('auth');