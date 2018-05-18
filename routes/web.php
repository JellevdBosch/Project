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
    return view('index');
});
Route::get('/activiteiten', function () {
    return view('activiteiten');
});
Route::get('/parkvereniging', function () {
    return view('parkvereniging');
});
Route::get('/vogelwerkgroep', function () {
    return view('vogelwerkgroep');
});
Route::get('/fotos', function () {
    return view('fotos');
});
Route::get('/contact', function () {
    return view('contact');
});


