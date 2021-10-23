<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\CategoryController;
use App\Http\Controller\SignUpController;
use App\Http\Controller\SignInController;
use App\Http\Controllers\BannerController;
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

Route::get('/','HomeController@index')->name('home');
Route::prefix('')->group(function () {
    Route::post('/addCart/{id}','CartController@store');
    Route::post('/deleteItemCart','CartController@delete');
});

//Authentication   
Route::resource('/signin','SignInController');
Route::resource('/signup','SignUpController');


Route::get('/shipping','CartController@index')->name('shipping');


Route::get('/products/{slug}','ProductController@product_detail');
Route::post('/products/detail','ProductController@getInfoProduct');


Route::group(["prefix" => "admin"], function(){
    Route::get('/', function () {
        return view('admin.pages.dashboard.dashboard');
    })->name("dashboard");

    Route::get('/products-list', [ProductController::class, 'productList'])->name("products-list");
    Route::get('/products-grid', [ProductController::class, 'productGrid'])->name("products-grid");
    Route::get('/products-grid/{id}', [ProductController::class, 'destroyProductGrid'])->name("products-grid.destroy");
    Route::get('/products-list/{id}', [ProductController::class, 'destroyProductList'])->name("products-list.destroy");
    Route::get('/add-new-product', [ProductController::class, 'listCategory'])->name("add-new-product");
    Route::get('/update-product', function () {
        return view('admin.pages.eCommerce.update-product');
    })->name('update-product');

    Route::get('/products-grid/{id}', [ProductController::class, 'updateView'])->name("products-grid.update-view");
    Route::post('/update-product/{id}', [ProductController::class, 'updateProductGrid'])->name("products-grid.update");
    Route::post('/add-new-product/add', [ProductController::class, 'addProductGrid'])->name("add-new-product.add");

    Route::get('/products-categories', function () {
        return view('admin.pages.eCommerce.products-categories');
    })->name("products-categories");

    Route::get('/orders', function () {
        return view('admin.pages.eCommerce.orders');
    })->name("orders");
    Route::get('/orders-detail', function () {
        return view('admin.pages.eCommerce.orders-detail');
    })->name("orders-detail");

    Route::get('/banner', [BannerController::class, 'show'])->name("banners");
    Route::get('/banner/{id}', [BannerController::class, 'destroy'])->name("banners-destroy");

    Route::get('/logout', 'SignInController@logout')->name('logout');
    
    Route::resource('/post','PostController');

    Route::get('/order/orders', [OrderController::class, 'index'])->name('orders');
    Route::get('/order/order-details', [OrderDetailController::class, 'index'])->name('order-details');

    //Category
    Route::resource('/category','CategoryController');
    Route::get('/category/delete/{id}', 'CategoryController@destroy');
});
