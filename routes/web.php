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
    return view('website.home');
});
Route::get('/gallery', function () {
    return view('website.gallery');
});
Route::get('/contact-us', function () {
    return view('website.contact-us');
});
Route::get('/about', function () {
    return view('website.about');
});
Route::get('/services', function () {
    return view('website.services');
});

Auth::routes();

Route::get('/admin', function () {
    return view('admin.slider.create');
});

//
//Route::get('/error', function () {
//    abort(403);
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
