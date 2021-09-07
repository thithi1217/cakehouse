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

Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');
Route::get('/san-pham','App\Http\Controllers\HomeController@san_pham');
Route::get('/details-product','App\Http\Controllers\HomeController@details_product');
Route::post('/tim-kiem','App\Http\Controllers\HomeController@tim_kiem');
//Gioi thieu
Route::get('/gioi-thieu','App\Http\Controllers\HomeController@gioi_thieu');
// Danh mục sản phẩm
Route::get('/danh-muc-san-pham/{category_id}','App\Http\Controllers\CategoryProduct@show_category');

Route::get('/chi-tiet-san-pham/{product_id}','App\Http\Controllers\ProductController@details_product');



// Amin
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');
//Admin - Blog
Route::get('/add-blog','App\Http\Controllers\Blog@add_blog');
//Category Product

Route::get('/add-category-product','App\Http\Controllers\CategoryProduct@add_category_product');
Route::get('/all-category-product','App\Http\Controllers\CategoryProduct@all_category_product');
Route::get('/edit-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@delete_category_product');

Route::post('/save-category-product','App\Http\Controllers\CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@update_category_product');

//Product

Route::get('/add-product','App\Http\Controllers\ProductController@add_product');
Route::get('/all-product','App\Http\Controllers\ProductController@all_product');
Route::get('/edit-product/{product_id}','App\Http\Controllers\ProductController@edit_product');
Route::get('/delete-product/{product_id}','App\Http\Controllers\ProductController@delete_product');
Route::get('/show-product/{product_id}','App\Http\Controllers\ProductController@show_product');
Route::get('/hidden-product/{product_id}','App\Http\Controllers\ProductController@hidden_product');

Route::post('/save-product','App\Http\Controllers\ProductController@save_product');
Route::post('/update-product/{product_id}','App\Http\Controllers\ProductController@update_product');

//Cart
Route::post('/save-cart','App\Http\Controllers\CartController@save_cart');
Route::get('/show-cart','App\Http\Controllers\CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','App\Http\Controllers\CartController@delete_to_cart');
Route::post('/update-cart-qty','App\Http\Controllers\CartController@update_cart_qty');

Route::post('/add-cart-ajax','App\Http\Controllers\CartController@add_cart_ajax');
Route::get('/cart-ajax','App\Http\Controllers\CartController@cart_ajax');
//Checkout
Route::post('/login-customer','App\Http\Controllers\CheckoutController@login_customer');
Route::get('/login-checkout','App\Http\Controllers\CheckoutController@login_checkout');
Route::get('/logout-checkout','App\Http\Controllers\CheckoutController@logout_checkout');
Route::post('/add-customer','App\Http\Controllers\CheckoutController@add_customer');
Route::get('/checkout','App\Http\Controllers\CheckoutController@checkout');
Route::post('/save-checkout-customer','App\Http\Controllers\CheckoutController@save_checkout_customer');
Route::get('/order-complete','App\Http\Controllers\CheckoutController@order_complete');

//Order
Route::get('/manage-order','App\Http\Controllers\CheckoutController@manage_order');
Route::get('/view-order/{order_code}','App\Http\Controllers\CheckoutController@view_order');
