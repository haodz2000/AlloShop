<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\CategoryController;
use App\Http\Controller\SignUpController;
use App\Http\Controller\SignInController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CodeDiscountController;
use App\Http\Controllers\ProductDetailContrloller;
use App\Http\Controllers\PostController;


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
    Route::get('/products/{slug}',['uses'=>'ProductController@productDetail'])->name('products.slug');
    Route::post('/addCart','CartController@store')->name('addToCart');
    Route::post('/addItemCart','CartController@storeItem')->name('addItemCart');
    Route::post('/deleteItemCart','CartController@delete');
    Route::post('/updateCart','CartController@update');
    Route::post('/getSizeColor','ProductController@getSizeAndColor')->name('SizeColor');
    Route::post('/products/detail','ProductController@getInfoProduct')->name('product.detail');
    Route::get('/shipping','CartController@index')->name('shipping')->middleware('auth');
    Route::post('/shipping','client\OrderController@order')->name('checkout')->middleware(['auth','validate.user']);
    Route::get('shipping/order','client\OrderController@listOrderedClient')->name('shipping.order')->middleware('auth');
    Route::post('shipping/order/detail','Client\OrderController@getOrderDetail')->name('shipping.order.detail')->middleware('auth');
    Route::post('shipping/order/cancel', 'Client\OrderController@cancelOrder')->name('shipping.order.cancel')->middleware('auth');
    Route::get('/men/products', 'HomeController@men')->name('clothes.men');
    Route::get('/women/products', 'HomeController@women')->name('clothes.women');
    Route::post('/getDataProduct','CartController@getProduct')->name('getDataProduct');
    Route::get('/unisex/products', 'HomeController@unisex')->name('clothes.unisex');
    Route::get('all/products','HomeController@allProduct')->name('clothes.all');
    Route::post('/shipping/order/rating','client\RatingController@rating')->name('shipping.order.rating');
    Route::get('/contact.html',function(){
        return view('client.pages.contact.contact');
    })->name('contact');
    Route::get('user/profile','client\UserController@index')->name('user.profile')->middleware('auth');
    Route::post('/user/profile/update','client\UserController@update')->name('user.profile.update')->middleware('auth');
});
// Facebook Login
Route::get('/signin/facebook', 'SignInController@redirectToFacebook')->name('facebook.login');
Route::get('/signin/facebook/callback', 'SignInController@handleFacebookCallback');

// Google Login
Route::get('/signin/google', 'SignInController@redirectToGoogle')->name('google.login');
Route::get('/signin/google/callback', 'SignInController@handleGoogleCallback');


//Authentication
Route::resource('/signin','SignInController');
Route::resource('/signup','SignUpController');

Route::group(["prefix" => "admin","middleware" => "auth"], function(){
    Route::get('/', function () {
        return view('admin.pages.dashboard.dashboard');
    })->name("dashboard");

    Route::get('/products-list', [ProductController::class, 'productList'])->name("products-list");
    Route::get('/products-list/category/{category}', [ProductController::class, 'productListSelectCategory'])->name("products-list-select-category");
    Route::get('/products-grid', [ProductController::class, 'productGrid'])->name("products-grid");
    Route::get('/products-grid/destroy/{id}', [ProductController::class, 'destroyProductGrid'])->name("products-grid.destroy");
    Route::get('/products-list/{id}', [ProductController::class, 'destroyProductList'])->name("products-list.destroy");
    Route::get('/add-new-product', [ProductController::class, 'listCategory'])->name("add-new-product");
    Route::get('/update-product', function () {
        return view('admin.pages.eCommerce.update-product');
    })->name('update-product');

    Route::get('/products-grid/{id}', [ProductController::class, 'updateView'])->name("products-grid.update-view");
    Route::post('/update-product/{id}', [ProductController::class, 'updateProduct'])->name("products-grid.update");
    Route::post('/add-new-product/add', [ProductController::class, 'addProduct'])->name("add-new-product.add");

    Route::get('/products-categories', function () {
        return view('admin.pages.eCommerce.products-categories');
    })->name("products-categories");

    Route::get('/orders', function () {
        return view('admin.pages.eCommerce.orders');
    })->name("orders");
    Route::get('/orders-detail', function () {
        return view('admin.pages.eCommerce.orders-detail');
    })->name("orders-detail");

    Route::resource('/banner','BannerController');

    Route::resource('/post','PostController');

    Route::get('/logout', 'SignInController@logout')->name('logout');

    //Category

    Route::get('/order/orders', [OrderController::class, 'show'])->name('orders');
    Route::get('/order/order-details/{order_id}/{customer_id}/{shipper_id}', [OrderDetailController::class, 'show'])->name('order-details');
    Route::post('/order/order-details/update-status/{order_id}', [OrderDetailController::class, 'changeStatus'])->name('changeStatus');


     //Category
    Route::resource('/category','CategoryController');
    Route::get('/category/delete/{id}', 'CategoryController@destroy');

    //Code
    Route::resource('/code-discount','CodeDiscountController');


});
