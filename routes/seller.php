<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Seller\Auth\AuthController;


Route::group(['namespace' => 'seller', 'as' => 'seller.'], function () {
Route::get('sellercheck', [SellerController::class, 'index'])->name('seller');
Route::get('registers', [AuthController::class, 'register'])->name('registers');
Route::post('store', [AuthController::class, 'store'])->name('store');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'save'])->name('login');

});
