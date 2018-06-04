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

//Route::get('/', function () {
//    return view('index');
//});
Route::get('/', 'Controller@index');

//Route::get('/activiteiten', function () {
//    return view('activiteiten');
//});
Route::get('/activiteiten', 'Controller@activiteiten');

//Route::get('/parkvereniging', function () {
//    return view('parkvereniging');
//});
Route::get('/parkvereniging', 'Controller@parkvereniging');

Route::get('/vogelwerkgroep', function () {
    return view('vogelwerkgroep');
});
Route::get('/vogelwerkgroep', 'Controller@vogelwerkgroep');

//Route::get('/fotos', function () {
//    return view('fotos');
//});
Route::get('/fotos', 'Controller@fotos');

//Route::get('/contact', function () {
//    return view('contact');
//});
Route::get('/contact', 'Controller@contact');



Route::get('/test', 'Controller@test');

Route::post('/test/register', 'Controller@create');
