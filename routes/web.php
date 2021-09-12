<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products',ProductController::class);
Route::get('products/soft/delete/{id}', [ProductController::class, 'softDelete'])->name('soft.delete');
Route::get('product/trash', [ProductController::class, 'TrashedProducts'])->name('product.trash');
Route::get('product/back/from/trash/{id}', [ProductController::class, 'backFromSoftDelete'])->name('product.back.trash');
Route::get('product/delete/from/db/{id}', [ProductController::class, 'DeleteForEver'])->name('delete.from.db');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
