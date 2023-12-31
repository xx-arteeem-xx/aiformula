<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use  App\Http\Controllers\ReceptController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/formula', function () {
    return view('formula');
});