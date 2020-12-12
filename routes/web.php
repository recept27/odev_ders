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

Route::get('/', function () {
    return view('layouts.index-master');
});

Route::get('/hakkimda', [\App\Http\Controllers\HomeController::class, 'ShowView']);
Route::get('/urunler', [\App\Http\Controllers\HomeController::class, 'ShowView1']);
Route::get('/alinanurun', [\App\Http\Controllers\HomeController::class, 'ShowView2']);

/*
  product işlemleri
*/
Route::get('/create-product', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
//
Route::post('/save-product', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.save');
Route::get('/show-product',[\App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/download-products',[\App\Http\Controllers\ProductController::class, 'export'])->name('product.export');

Route::get('/upload-product',[\App\Http\Controllers\ProductController::class, 'import'])->name('product.import');
