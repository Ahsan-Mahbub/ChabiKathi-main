<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Seller\Auth\AuthController;
use App\Http\Controllers\Seller\Auth\LoginController;
use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\Seller\ProfileController;
use App\Http\Controllers\Seller\ShopController;
use App\Http\Controllers\Seller\BrandController;
use App\Http\Controllers\Seller\PreviousProductController;
use App\Http\Controllers\Seller\StockController;
use App\Http\Controllers\Seller\CommissionController;
use App\Http\Controllers\Seller\VariationController;


Route::group(['namespace' => 'seller', 'as' => 'seller.'], function () {

    //Auth Route
    Route::get('sellercheck', [SellerController::class, 'index'])->name('seller');
    Route::get('registers', [AuthController::class, 'register'])->name('registers');
    Route::post('store', [AuthController::class, 'store'])->name('store');
    Route::get('login', [LoginController::class, 'loginView'])->name('loginView');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('forget', [AuthController::class, 'forget'])->name('forget');
    Route::get('forget_password/{token}', [AuthController::class, 'forgotPasswordValidate']);
    Route::post('forget', [AuthController::class, 'resetPassword'])->name('forget');
    Route::post('reset-password', [AuthController::class, 'updatePassword'])->name('reset-password');
    Route::get('verify/{token}', [AuthController::class, 'VerifyEmail'])->name('verify');

    //Dashboard
    Route::get('/dashboard', function () {
        return view('seller/content');
    });
    //Profile Route
    Route::get('profile', [ProfileController::class, 'index'])->name('profile')->middleware('seller');
    Route::post('profile_update', [ProfileController::class, 'profile_update'])->name('profile_update');
    //Shop Route
    Route::get('shop_view', [ShopController::class, 'shop_view'])->name('shop_view');
    Route::post('update/{id}', [ShopController::class, 'update'])->name('update');
    Route::get('holiday/{id}/{holiday}', [ShopController::class, 'holiday'])->name('holiday');
    // Product Route
    Route::group(['prefix' => 'product'], function () {
        Route::get('/list', [ProductController::class, 'index'])->name('product.list');
        Route::get('create', [ProductController::class, 'create'])->name('product.create');
        Route::post('store', [ProductController::class, 'store'])->name('product.store');
        Route::get('show/{id}', [ProductController::class, 'show'])->name('product.show');
        Route::get('status/{id}/{status}', [ProductController::class, 'status'])->name('product.status');
        Route::get('approval/{id}', [ProductController::class, 'approval'])->name('product.approval');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('update/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::delete('delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
        // Previous Product Controller
        Route::get('previous-product', [PreviousProductController::class, 'index'])->name('product.previous');
        Route::post('previous-productprevious-store', [PreviousProductController::class, 'store'])->name('productprevious.store');
    });
    // Variation Route
    Route::group(['prefix' => 'variation'], function () {
        Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
        Route::post('brand/store', [BrandController::class, 'store'])->name('brand.store');
        Route::get('/color/create', [VariationController::class, 'colorcreate'])->name('color.create');
        Route::post('color/store', [VariationController::class, 'colorstore'])->name('color.store');
        Route::get('/size/create', [VariationController::class, 'sizecreate'])->name('size.create');
        Route::post('size/store', [VariationController::class, 'sizestore'])->name('size.store');
        Route::get('/weight/create', [VariationController::class, 'weightcreate'])->name('weight.create');
        Route::post('weight/store', [VariationController::class, 'weightstore'])->name('weight.store');
    });
    // Stock Route
    Route::group(['prefix' => 'stock'], function () {
        Route::get('/list', [StockController::class, 'index'])->name('stock.list');
        Route::get('create', [StockController::class, 'create'])->name('stock.create');
        Route::post('store', [StockController::class, 'store'])->name('stock.store');
        Route::get('status/{id}', [StockController::class, 'status'])->name('stock.status');
        Route::get('edit/{id}', [StockController::class, 'edit'])->name('stock.edit');
        Route::post('update/{id}', [StockController::class, 'update'])->name('stock.update');
        Route::delete('delete/{id}', [StockController::class, 'destroy'])->name('stock.delete');
    });
    // Commission Route
    Route::group(['prefix' => 'commission'], function () {
        Route::get('/list', [CommissionController::class, 'index'])->name('commission.list');
    });

    Route::get('/category/{value}', [VariationController::class, 'getCategory']);

});



