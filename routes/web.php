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

Route::get('/', "WebsiteController@index");
Route::get('/gallery', "WebsiteController@gallery");
Route::match(["get", "post"], '/contact-us', "WebsiteController@contactUs");
Route::get('/about', "WebsiteController@about");
Route::get('/services', "WebsiteController@services");

Auth::routes(["register" => false]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', "Admin\ConfigController@index");
    Route::resource('config', "Admin\ConfigController")->only(['store', 'update']);
    Route::resource('sliders', 'Admin\SliderController')->except(['show']);
    Route::resource('services', 'Admin\ServiceController')->except(['show']);
    Route::resource('clients', 'Admin\ClientController')->except(['show', 'edit', 'update']);
    Route::resource('gallery', 'Admin\GalleryController')->except(['show', "edit", "update"]);
    Route::post("/mails/{id}/replay", "Admin\MailController@replay")->name("mails.replay");
    Route::resource('mails', 'Admin\MailController')->except(["edit", "update", "store", "create"]);
});
