<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/produk', [ProductController::class, 'index'])->name('products.index');
Route::get('/produk/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
Route::get('/berita/{news}', [NewsController::class, 'show'])->name('news.show');

Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/produk/{id}', [HomeController::class, 'showProduct'])->name('product.show');
Route::get('/berita/{id}', [HomeController::class, 'showNews'])->name('news.show');
Route::get('/galeri/{id}', [HomeController::class, 'showGallery'])->name('gallery.show');


require __DIR__.'/auth.php';
