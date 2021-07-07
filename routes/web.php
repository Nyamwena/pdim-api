<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('products')->group(function() {
    Route::get('/add', [App\Http\Controllers\ProductController::class,'addProducts'])->name('product.add');
    Route::post('/save', [App\Http\Controllers\ProductController::class,'saveProducts'])->name('product.save');
    Route::get('/view', [App\Http\Controllers\ProductController::class,'viewProducts'])->name('product.view');
});
