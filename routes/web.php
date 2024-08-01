<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'quotation.index')->name('home');

Route::view('/registrar', 'auth.register')->name('register');
Route::post('/registrar', [AuthController::class, 'register']);

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login']);