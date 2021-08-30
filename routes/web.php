<?php
use Illuminate\Support\Facades\Route;
//BackAuth-Controller
use App\Http\Controllers\AuthController;
//Fontend-Controller
use App\Http\Controllers\fontController\HomeController;
use App\Http\Controllers\fontController\CategoryProductController;
use App\Http\Controllers\fontController\SubCategoryProductController;
use App\Http\Controllers\fontController\SingleProductController;
// Backend-Controller
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SliderController;

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

// Front View Route
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/category/{slug}', [CategoryProductController::class, 'categoryProduct']);
Route::get('/sub-category/{id}', [SubCategoryProductController::class, 'subCategoryProduct']);
Route::get('/product/{slug}', [SingleProductController::class, 'singleProduct']);

Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/vendor', [HomeController::class, 'vendor'])->name('vendor');
Route::get('/campaign', [HomeController::class, 'campaign'])->name('campaign');
Route::get('/category-all-product', [HomeController::class, 'allproduct'])->name('category-all-product');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/marchent-login', [HomeController::class, 'marchentlogin'])->name('marchent-login');
Route::get('/marchent-registration', [HomeController::class, 'marchentregistration'])->name('marchent-registration');


// Back View Route
Route::group(['prefix' => 'admin'], function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
        return view('backend/layouts/content');
    })->name('admin');
    //Profile Route
    Route::get('/profile', [AuthController::class, 'index'])->name('profile');
    Route::post('/profile-store', [AuthController::class, 'store'])->name('profile.store');
    Route::post('/password-store', [AuthController::class, 'passwordStore'])->name('password.store');
    // Category Route
    Route::group(['prefix' => 'category'], function () {
        Route::get('/list', [CategoryController::class, 'index'])->name('category.list');
        Route::get('create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('status/{id}', [CategoryController::class, 'status'])->name('category.status');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    });
    // Sub-Category Route
    Route::group(['prefix' => 'sub-category'], function () {
        Route::get('/list', [SubCategoryController::class, 'index'])->name('sub-category.list');
        Route::get('create', [SubCategoryController::class, 'create'])->name('sub-category.create');
        Route::post('store', [SubCategoryController::class, 'store'])->name('sub-category.store');
        Route::get('status/{id}', [SubCategoryController::class, 'status'])->name('sub-category.status');
        Route::get('edit/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.edit');
        Route::post('update/{id}', [SubCategoryController::class, 'update'])->name('sub-category.update');
        Route::delete('delete/{id}', [SubCategoryController::class, 'destroy'])->name('sub-category.delete');
    });
    // Size Route
    Route::group(['prefix' => 'size'], function () {
        Route::get('/list', [SizeController::class, 'index'])->name('size.list');
        Route::get('create', [SizeController::class, 'create'])->name('size.create');
        Route::post('store', [SizeController::class, 'store'])->name('size.store');
        Route::get('status/{id}', [SizeController::class, 'status'])->name('size.status');
        Route::get('edit/{id}', [SizeController::class, 'edit'])->name('size.edit');
        Route::post('update/{id}', [SizeController::class, 'update'])->name('size.update');
        Route::delete('delete/{id}', [SizeController::class, 'destroy'])->name('size.delete');
    });
    // Weight Route
    Route::group(['prefix' => 'weight'], function () {
        Route::get('/list', [WeightController::class, 'index'])->name('weight.list');
        Route::get('create', [WeightController::class, 'create'])->name('weight.create');
        Route::post('store', [WeightController::class, 'store'])->name('weight.store');
        Route::get('status/{id}', [WeightController::class, 'status'])->name('weight.status');
        Route::get('edit/{id}', [WeightController::class, 'edit'])->name('weight.edit');
        Route::post('update/{id}', [WeightController::class, 'update'])->name('weight.update');
        Route::delete('delete/{id}', [WeightController::class, 'destroy'])->name('weight.delete');
    });
    // Color Route
    Route::group(['prefix' => 'color-code'], function () {
        Route::get('/list', [ColorController::class, 'index'])->name('color-code.list');
        Route::get('create', [ColorController::class, 'create'])->name('color-code.create');
        Route::post('store', [ColorController::class, 'store'])->name('color-code.store');
        Route::get('status/{id}', [ColorController::class, 'status'])->name('color-code.status');
        Route::get('edit/{id}', [ColorController::class, 'edit'])->name('color-code.edit');
        Route::post('update/{id}', [ColorController::class, 'update'])->name('color-code.update');
        Route::delete('delete/{id}', [ColorController::class, 'destroy'])->name('color-code.delete');
    });
    // Brand Route
    Route::group(['prefix' => 'brand'], function () {
        Route::get('/list', [BrandController::class, 'index'])->name('brand.list');
        Route::get('create', [BrandController::class, 'create'])->name('brand.create');
        Route::post('store', [BrandController::class, 'store'])->name('brand.store');
        Route::get('status/{id}', [BrandController::class, 'status'])->name('brand.status');
        Route::get('edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
        Route::post('update/{id}', [BrandController::class, 'update'])->name('brand.update');
        Route::delete('delete/{id}', [BrandController::class, 'destroy'])->name('brand.delete');
    });
    // Shop Route
    Route::group(['prefix' => 'shop'], function () {
        Route::get('/list', [ShopController::class, 'index'])->name('shop.list');
        Route::get('create', [ShopController::class, 'create'])->name('shop.create');
        Route::post('store', [ShopController::class, 'store'])->name('shop.store');
        Route::get('status/{id}', [ShopController::class, 'status'])->name('shop.status');
        Route::get('edit/{id}', [ShopController::class, 'edit'])->name('shop.edit');
        Route::post('update/{id}', [ShopController::class, 'update'])->name('shop.update');
        Route::delete('delete/{id}', [ShopController::class, 'destroy'])->name('shop.delete');
    });
    // Product Route
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
        Route::get('subcategory/{id}', [ProductController::class, 'subcategory'])->name('product.subcategory');
        Route::get('shop/{id}', [ProductController::class, 'shop'])->name('product.shop');
    });
    // Slider Route
    Route::group(['prefix' => 'slider'], function () {
        Route::get('/list', [SliderController::class, 'index'])->name('slider.list');
        Route::get('create', [SliderController::class, 'create'])->name('slider.create');
        Route::post('store', [SliderController::class, 'store'])->name('slider.store');
        Route::get('status/{id}', [SliderController::class, 'status'])->name('slider.status');
        Route::get('edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
        Route::post('update/{id}', [SliderController::class, 'update'])->name('slider.update');
        Route::delete('delete/{id}', [SliderController::class, 'destroy'])->name('slider.delete');
    });
});
