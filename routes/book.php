<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;

Route::post('/books', [BookController::class, 'addBook']);

Route::get('/books', [BookController::class, 'getBooks']);

Route::get('/books/{id}', [BookController::class, 'getSingleBook']);

Route::put('/books/{id}', [BookController::class, 'updateBook']);

Route::delete('/books/{id}', [BookController::class, 'deleteBook']);