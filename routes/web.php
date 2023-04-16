<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin', AdminController::class);

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {
    Route::resource('category', App\Http\Controllers\CategoryController::class);
    Route::resource('product', App\Http\Controllers\ProductController::class);
    Route::resource('color', App\Http\Controllers\ColorController::class);
    Route::resource('size', App\Http\Controllers\SizeController::class);
    Route::resource('download', App\Http\Controllers\Admin\DownloadController::class)->only('store', 'update', 'destroy');
});
