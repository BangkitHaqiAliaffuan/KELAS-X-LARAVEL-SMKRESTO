<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'index']);
Route::get('/show/{id}', [FrontController::class, 'show']);
Route::get('register', [FrontController::class, 'register']);
Route::get('login', [FrontController::class, 'login']);
Route::get('logout', [FrontController::class, 'logout']);
Route::post('postregister', [FrontController::class, 'store']);
Route::post('postlogin', [FrontController::class, 'postlogin']);
Route::get('beli/{idmenu}', [CartController::class, 'beli']);

Route::get('cart', [CartController::class, 'cart']);
?>