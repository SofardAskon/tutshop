<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', [CommonController::class, 'home'])->name('home');
Route::get('/shop', [CommonController::class, 'shop'])->name('shop');
Route::get('/shop/{id}', [CommonController::class, 'product'])->name('product');
Route::post('/category', [CommonController::class, 'filter'])->name('filter');

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);

    return redirect()->back();
})->name('locale');

Route::post('/order', [CommonController::class, 'createOrder'])->name('order');


Route::prefix('admin')->group(function () {
    Route::resource('category', App\Http\Controllers\CategoryController::class);
    Route::resource('product', App\Http\Controllers\ProductController::class);
    Route::resource('color', App\Http\Controllers\ColorController::class);
    Route::resource('size', App\Http\Controllers\SizeController::class);
    Route::resource('slider', App\Http\Controllers\SliderController::class);
    Route::resource('download', App\Http\Controllers\Admin\DownloadController::class)->only('store', 'update', 'destroy');

    Route::resource('filter', App\Http\Controllers\FilterController::class);
    Route::resource('filter.values', App\Http\Controllers\FilterValueController::class)->shallow();
});
