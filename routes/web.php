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

Route::get('/', 'pagesController@home')->name('pages.home');
Route::get('/products', 'pagesController@products')->name('pages.products');
Route::get('/single_product', 'pagesController@single_product')->name('pages.single_product');
Route::get('/checkout', 'pagesController@checkout')->name('pages.checkout');
Route::get('/single', 'pagesController@single')->name('pages.single');




Route::get('/react', function (){
    return view('react');
});
