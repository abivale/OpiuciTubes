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
    return view('home', [
        "title" => "Home & Lifestyle"
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