<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Seller\SellerController;


Route::group(['namespace' => 'seller', 'as' => 'seller.'], function () {
Route::get('sellercheck', [SellerController::class, 'index'])->name('seller');
Route::get('registers', [SellerController::class, 'register'])->name('registers');
});
