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
    return view('admin.gallery.create');
});
Route::post('/file-upload', function (\Illuminate\Http\Request $request) {
    return response()->json($request->all(), 200);
});
//Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
////    Route::get('/', "Admin\ConfigController@index");
//    Route::match(["get", "post"], '/config/{id?}', "Admin\ConfigController@store");
//    Route::resource('about', 'Admin\AboutController')->except(['show', 'store','destroy']);
//});
Auth::routes(['register' => false]);