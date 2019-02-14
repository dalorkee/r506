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

/* Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('main.index');
})->name('mainpage');

Route::get('/sittuation', function () {
    return view('main.sittuation');
})->name('sittuation');

Route::get('/base506', function () {
    return view('main.base506');
})->name('base506');
