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
    return view('base');
});
Route::get('/read', function () {
    return view('read');
});
Route::get('/insert', function () {
    return view('insert');
});

Route::resource('customer','14089_Galantryas_controller');