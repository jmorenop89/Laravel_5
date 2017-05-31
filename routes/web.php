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

Route::get('/', function () {
    return view('welcome');
});

Route::get('product',['as' => 'product.index','uses' => 'ProductController@index']);
Route::get('product/create',['as' => 'product.create','uses' => 'ProductController@create']);
Route::post('product/create',['as' => 'product.create','uses' => 'ProductController@store']);
Route::get('product/edit/{id}',['as' => 'product.edit','uses' => 'ProductController@edit']);
Route::post('product/edit/{id}',['as' => 'product.edit','uses' => 'ProductController@update']);
Route::get('product/delete/{id}',['as' => 'product.delete','uses' => 'ProductController@delete']);
