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
Route::get('/park-vereniging', function () {
    return view('parkvereniging');
});
Route::get('/vogel-werkgroep', function () {
    return view('vogelwerkgroep');
});
Route::get('/fotos', function () {
    return view('fotos');
});
Route::get('/Contact', function () {
    return view('contact');
});
Route::get('/extra-informatie', function () {
    return view('extrainformatie');
});


