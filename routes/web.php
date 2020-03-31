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
    return view('web.home.index');
});

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
    Route::resource('people', 'PersonController');
    Route::resource('services', 'ServiceController');
    Route::resource('clients', 'ClientController');
    
    
    Route::post("/products/{product}/technologies", 'ProductController@syncTechnology');
    Route::get("/products/{product}/technologies", 'ProductController@technologies');
    Route::get("/products/{product}/images", 'ProductController@images');
    Route::resource('products', 'ProductController');

    Route::resource('product_images', 'ProductImageController');
    Route::resource('technologies', 'TechnologyController');
    Route::resource('awards', 'AwardController');
    Route::resource('settings', 'SettingController');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'WebController@home')->name('Web');
Route::get('/about', 'WebController@about')->name('about');
Route::get('/team', 'WebController@team')->name('team');
Route::get('/sms', 'WebController@sms')->name('sms');
Route::get('/lpg', 'WebController@lpg')->name('lpg');
Route::get('/work', 'WebController@work')->name('work');
Route::get('/contacts', 'WebController@contacts')->name('contacts');
