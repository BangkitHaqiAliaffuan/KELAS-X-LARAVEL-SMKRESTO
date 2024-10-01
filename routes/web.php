<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'index']);
Route::get('/show/{id}', [FrontController::class, 'show']);
Route::get('register', [FrontController::class, 'register']);