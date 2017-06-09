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
    return view('pages.home');
});*/
Route::get('/', 'HomeImageController@index'); 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/gallery', 'ImageGalleryController@index');
Route::post('/gallery', 'ImageGalleryController@upload');
Route::delete('gallery/{id}', 'ImageGalleryController@destroy');
Route::get('about', function() {
    return view('pages.about');
});
Auth::routes();

