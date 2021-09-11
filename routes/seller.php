<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Seller\Auth\AuthController;
use App\Http\Controllers\Seller\Auth\LoginController;
use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\Seller\ProfileController;
use App\Http\Controllers\Seller\ShopController;


Route::group(['namespace' => 'seller', 'as' => 'seller.'], function () {
    Route::get('sellercheck', [SellerController::class, 'index'])->name('seller');
    Route::get('registers', [AuthController::class, 'register'])->name('registers');
    Route::post('store', [AuthController::class, 'store'])->name('store');
    Route::get('loginView', [LoginController::class, 'loginView'])->name('loginView');
 
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('forget', [AuthController::class, 'forget'])->name('forget');
    Route::get('forget_password/{token}', [AuthController::class, 'forgotPasswordValidate']);
    Route::post('forget', [AuthController::class, 'resetPassword'])->name('forget');
    Route::post('reset-password', [AuthController::class, 'updatePassword'])->name('reset-password');
    Route::get('verify/{token}', [AuthController::class, 'VerifyEmail'])->name('verify');

    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('profile_update', [ProfileController::class, 'profile_update'])->name('profile_update');

    Route::get('shop_view', [ShopController::class, 'shop_view'])->name('shop_view');
    Route::post('update', [ShopController::class, 'update'])->name('update');

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

    Route::get('/dashboard', function () {
        return view('seller/content');
    });
});



