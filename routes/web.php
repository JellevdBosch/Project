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
Route::delete('/admin/image-gallery/{image}/{id}', 'ImageGalleryController@destroy');

Route::get('/admin/activiteiten', 'ActiviteitController@index');
Route::post('/admin/activiteiten', 'ActiviteitController@upload');
Route::delete('/admin/activiteiten/{id}', 'ActiviteitController@destroy');

Route::get('/admin/artikel', 'AdminController@index');
Route::post('/admin/artikel', 'AdminController@upload');
Route::delete('/admin/artikel/{id}', 'AdminController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'HomeController@user');

// EDITS
Route::get('/admin/edit/activiteit/{id}', 'ActiviteitController@read');
Route::post('/admin/edit/activiteit', 'ActiviteitController@update');