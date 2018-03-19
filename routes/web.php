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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','ProductsController@index');
Route::get('/products','ProductsController@index');
Route::get('/courses','CoursesController@index');
/*Route::get('/', function () {
    return view('homepage');
});*/
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'backend'], function () {
   Route::get('/','Admin\ProductsController@index');
   Route::get('/products','Admin\ProductsController@index');
   Route::get('/products/create','Admin\ProductsController@create');
   Route::post('/products/store','Admin\ProductsController@store');
   Route::get('/products/delete/{id}','Admin\ProductsController@destroy');
});

Route::get('/books','BooksController@index');
Route::get('/books/create','BooksController@create');
Route::post('/books','BooksController@store');
Route::get('/books/{id}/show','BooksController@show');
Route::get('/books/{id}/edit','BooksController@edit');
Route::post('/books/{id}','BooksController@update');
Route::get('/books/{id}/delete','BooksController@destroy');
