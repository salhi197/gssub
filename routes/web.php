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

Route::get('/','ProduitController@index')->name('welcome');

Route::get('/produits', function () {
    return view('produits');
});

Route::get('/produits-{id}','ProduitController@show')->name('single-product');

Route::get('/produits','ProduitController@showAll')->name('products');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
