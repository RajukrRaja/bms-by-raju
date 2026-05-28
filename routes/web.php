<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BookController;



Route::prefix('auth')->group(function () {

    Route::get('/register-page', [AuthController::class, 'register_page']);

    Route::get('/login-page', [AuthController::class, 'login_page']);

    Route::get('/profile', [AuthController::class, 'profile']);




});


     Route::get('/create-books', [BookController::class, 'addBookView']);
