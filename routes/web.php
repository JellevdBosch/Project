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


Route::get('/', 'Controller@index');

Route::get('/activiteiten', 'Controller@activiteiten');

Route::get('/parkvereniging', 'Controller@parkvereniging');

Route::get('/vogelwerkgroep', 'Controller@vogelwerkgroep');

Route::get('/fotos', 'Controller@fotos');

Route::get('/contact', 'Controller@contact');
Route::post('/contact', 'Controller@contact');

Route::get('/artikel', 'Controller@Artikel');
Route::post('/admin', 'Controller@createArtikel');

Route::get('/admin', 'Controller@admin');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/image-gallery', 'ImageGalleryController@index');
Route::post('/admin/image-gallery', 'ImageGalleryController@upload');
Route::delete('/admin/image-gallery/{id}', 'ImageGalleryController@destroy');
