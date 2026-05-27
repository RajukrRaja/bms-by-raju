<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;


Route::prefix('auth')->group(function (){

Route::get('/register-page' , [AuthController::class, 'register_page']);
Route::get('/login-page' , [AuthController::class, 'login_page']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:api')->group(function(){


Route::get('/profile', [AuthController::class, 'profile']);
Route::post('/logout', [AuthController::class , 'logout']);

});


});

