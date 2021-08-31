<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Seller\Auth\AuthController;
use App\Http\Controllers\Seller\Auth\LoginController;
use App\Http\Controllers\Seller\ProductController;

Route::group(['namespace' => 'seller', 'as' => 'seller.'], function () {
Route::get('sellercheck', [SellerController::class, 'index'])->name('seller');
Route::get('registers', [AuthController::class, 'register'])->name('registers');
Route::post('store', [AuthController::class, 'store'])->name('store');
Route::get('loginView', [LoginController::class, 'loginView'])->name('loginView');
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::group(['prefix' => 'product'], function () {
    Route::get('/list', [ProductController::class, 'index'])->name('product.list');
    Route::get('create', [ProductController::class, 'create'])->name('product.create');
    Route::post('store', [ProductController::class, 'store'])->name('product.store');
    Route::get('show/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::get('status/{id}', [ProductController::class, 'status'])->name('product.status');
    Route::get('approval/{id}', [ProductController::class, 'approval'])->name('product.approval');
    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    Route::get('category/{cat_id}', [ProductController::class, 'category'])->name('product.category');
});

});



