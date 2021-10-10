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
    return view('client.pages.home');
});

Route::get('/admin', function () {
    return view('admin.pages.dashboard');
});
Route::group(["prefix" => "admin"], function(){
    Route::get('/', function () {
        return view('admin.pages.dashboard.dashboard');
    })->name("dashboard");
    Route::get('/products-list', function () {
        return view('admin.pages.eCommerce.products-list');
    })->name("products-list");
    Route::get('/products-grid', function () {
        return view('admin.pages.eCommerce.products-grid');
    })->name("products-grid");
    Route::get('/products-categories', function () {
        return view('admin.pages.eCommerce.products-categories');
    })->name("products-categories");
    Route::get('/orders', function () {
        return view('admin.pages.eCommerce.orders');
    })->name("orders");
    Route::get('/orders-detail', function () {
        return view('admin.pages.eCommerce.orders-detail');
    })->name("orders-detail");
    Route::get('/add-new-product', function () {
        return view('admin.pages.eCommerce.add-new-product');
    })->name("add-new-product");
    Route::get('/signup', function () {
        return view('admin.pages.authentication.signup');
    })->name("signup");

    Route::get('/signin', function () {
        return view('admin.pages.authentication.signin');
    })->name("signin");

    Route::resource('/category','CategoryController');
    Route::get('/category/delete/{id}', 'CategoryController@destroy');
});
