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

// ROUTES FOR REGULAR PAGES
Route::get('/', 'Controller@index');

Route::get('/activiteiten', 'Controller@activiteiten');

Route::get('/parkvereniging', 'Controller@parkvereniging');

Route::get('/vogelwerkgroep', 'Controller@vogelwerkgroep');

Route::get('/fotos', 'Controller@fotos');

Route::get('/contact', 'Controller@contact');

// WTF IS THIS
Route::get('/home', 'HomeController@index')->name('home');

// ROUTES FOR ADMIN
Route::get('/admin', 'Controller@admin');

Route::get('/admin/image-gallery', 'ImageGalleryController@index');
Route::post('/admin/image-gallery', 'ImageGalleryController@upload');
Route::delete('/admin/image-gallery/{id}', 'ImageGalleryController@destroy');

Route::get('/admin/activiteiten', 'ActiviteitController@index');
Route::post('/admin/activiteiten', 'ActiviteitController@upload');
Route::delete('/admin/activiteiten/{id}', 'ActiviteitController@destroy');

Route::get('/admin/artikel', 'ArtikelController@index');
Route::post('/admin/artikel', 'ArtikelController@upload');
Route::delete('/admin/artikel/{id}', 'ArtikelController@destroy');