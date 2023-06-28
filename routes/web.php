<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

//Route::get('/product/details/{id}', [ProductController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'index']);

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

Route::get('/product/details', function () {
    return view('welcome');
});
