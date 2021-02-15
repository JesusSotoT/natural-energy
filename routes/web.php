<?php

/*
|--------------------------------------------------------------------------
| Web Main Site Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'MainSiteController@index')->name('inicio');
Route::get('/inicio', 'MainSiteController@index')->name('inicio');
Route::get('/inicio#nosotros-sec', 'MainSiteController@index')->name('nosotros');
Route::get('/productos/{filter}', 'MainSiteController@productsPage')->name('productos');
Route::post('/detail-product', 'MainSiteController@detailProduct')->name('detail-product');
Route::get('/blog', 'MainSiteController@blogPage')->name('blog');
Route::get('/article/{id}', 'MainSiteController@articlePage')->name('article');
Route::get('/tiendas', 'MainSiteController@shopsPage')->name('tiendas');
Route::get('/contacto', 'MainSiteController@contactPage')->name('contacto');

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
    Route::post('admin/update-product', 'ProductsController@updateProduct')->name('update-product');
    Route::post('admin/store-update-product', 'ProductsController@storeUpdateProduct')->name('store-update-product');
    Route::post('admin/view-product', 'ProductsController@viewProduct')->name('view-product');


    Route::get('admin/articles', 'ArticleController@index')->name('articles');
    Route::get('admin/new-article', 'ArticleController@newArticle')->name('new-article');
    Route::post('admin/store-new-article', 'ArticleController@storeNewArticle')->name('store-new-article');
    Route::post('admin/destroy-article', 'ArticleController@destroyArticle')->name('destroy-article');
    Route::post('admin/update-article', 'ArticleController@updateArticle')->name('update-article');
    Route::post('admin/view-article', 'ArticleController@viewArticle')->name('view-article');


    Route::get('admin/profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('admin/profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('admin/profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
});
