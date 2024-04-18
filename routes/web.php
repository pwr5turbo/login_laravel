<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/login.post', [authController::class, 'loginPost'])->name('login.Post');

Route::get('/register', [authController::class, 'register'])->name('register');
Route::post('/register', [authController::class, 'registerPost'])->name('register.Post');

