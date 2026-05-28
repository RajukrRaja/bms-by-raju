<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BookController;

Route::prefix('auth')->group(function () {

    Route::post('/register', [AuthController::class, 'register']);

    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/profile', [AuthController::class, 'profile']);

    Route::post('/logout', [AuthController::class, 'logout']);







});



Route::post('/books', [BookController::class, 'addBook']);

Route::get('/books', [BookController::class, 'getBooks']);

Route::get('/books/{id}', [BookController::class, 'getSingleBook']);

Route::get('/update-books/{id}', [BookController::class, 'updateBookView']);

Route::put('/books/{id}', [BookController::class, 'updateBook']);

Route::delete('/books/{id}', [BookController::class, 'deleteBook']);