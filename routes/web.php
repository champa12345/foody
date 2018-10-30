<?php

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

Route::get('/','Front\HomeController@__construct');

Auth::routes();

Route::get('/home', 'Front\HomeController@getCate')->name('home');

Route::group(['middleware' => ['checkAdmin']], function () {
    //
    Route::get('admin','Admin\DashboardController@index');
    Route::resource('admin/category', 'Admin\CategoryController');
    Route::resource('admin/product','Admin\ProductController');
    Route::resource('admin/news','Admin\NewsController');
    Route::resource('admin/group','Admin\GroupController');
    Route::resource('admin/user','Admin\UserController');
    Route::resource('admin/contact','Admin\ContactController');
    Route::resource('admin/order','Admin\OrderController');
    Route::resource('admin/brand','Admin\BrandController');

    Route::get('/admin/profile',function (){
        return view('user.profile');
    });
    Route::resource('/admin/ajax','Admin\AjaxController');

});
Route::group(['middleware' => ['checkLogin']], function () {
    Route::get('/account','Front\HomeController@account');
    Route::resource('order','OrderController');
    Route::resource('orderdetail','OrderdetailController');
    Route::resource('comment','Front\CommentController');
    Route::resource('contact','Front\ContactController');
    Route::resource('user','Front\UserController');
    Route::get('changePassword', 'Front\UserController@changePassword');
    Route::post('changePassword', 'Front\UserController@savePassword');
});

Route::resource('cart','ShoppingcartController');
Route::get('/Home','Front\HomeController@getCate');
Route::get('/dangnhap','Front\HomeController@login');
Route::resource('/news','Front\NewsController');
Route::resource('/product','Front\ProductController');
Route::resource('search','Front\SearchController');
Route::resource('category','Front\CategoryController');

Route::resource('home1','Client\HomeController');

