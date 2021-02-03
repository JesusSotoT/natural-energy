<?php

/*
|--------------------------------------------------------------------------
| Web  admin Routes
|--------------------------------------------------------------------------
*/

Route::get('admin', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/admin', 'HomeController@index')->name('home')->middleware('auth');

Auth::routes();

Route::get('admin/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('admin/user', 'UserController', ['except' => ['show']]);
    Route::get('admin/products', 'ProductsController@index')->name('products');
    Route::get('admin/new-product', 'ProductsController@newProduct')->name('new-product');
    Route::post('admin/store-new-product', 'ProductsController@storeNewProduct')->name('store-new-product');
    Route::post('admin/destroy-product', 'ProductsController@destroyProduct')->name('destroy-product');


    Route::get('admin/profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('admin/profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('admin/profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
});



/*
|--------------------------------------------------------------------------
| Web Main Site Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'MainSiteController@index')->name('inicio');
Route::get('/inicio', 'MainSiteController@index')->name('inicio');
