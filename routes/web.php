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

Route::get('/', 'PagesController@about');
Route::get('/about', 'PagesController@about');
Route::get('/offer', 'PagesController@offer');
Route::get('/pricing', 'PagesController@pricing');
Route::get('/shop', 'PagesController@shop');
Route::get('/sale', 'PagesController@sale');
Route::get('/contact', 'PagesController@contact');
Route::post('/save', [
    'as' => 'save',
    'uses' => 'PagesController@save'
]);