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

Route::get('/test', 'Controller@test');

Route::post('/test', 'Controller@createArtikel');

Route::get('/admin');