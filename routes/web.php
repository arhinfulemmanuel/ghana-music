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

Route::get('/','MainWebController@index');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::get('/create_advert', 'HomeController@create_advert');

Route::get('/addpost', 'HomeController@addpost');

Route::get('/allpost', 'HomeController@allpost');

Route::get('/statistics', 'HomeController@statistics');

Route::post('/store', 'HomeController@store');

Route::post('/store_advert', 'HomeController@store_advert');

Route::get('/ads','HomeController@ads');

Route::get('/services', 'MainWebController@services');

Route::post('delete/{id}', 'HomeController@delete')->name('delete');

Route::post('delete_ad/{id}','HomeController@delete_ad')->name('delete_ad');

Route::post('/download/{id}','MainWebController@download')->name('download');

Route::post('/downloadpost/{id}','MainWebController@downloadPost')->name('download_post');

Route::get('admin/{id}', 'HomeController@show')->name('show');

Route::get('/ad/{id}/{title}', 'MainWebController@show_ad')->name('single_ad');

Route::get('/post/{id}/{title}', 'MainWebController@show_post')->name('single_post');

Route::post('comment/{id}', 'MainWebController@saveComment')->name('save_comment');

Route::post('postcomment/{id}', 'MainWebController@save_post_comment')->name('save_post_comment');

Route::get('/charts', 'ChartsController@index')->name('charts');

//Route::post('/loadmore', 'ChartsController@loadmore')->name('loadmore');

Route::get('/create_chart', 'HomeController@createchat');

Route::post('/savechart', 'HomeController@savechart')->name('savechart');

Route::post('/search_result', 'MainWebController@search')->name('search');

Route::get('categories/{cat_name}', 'MainWebController@category')->name('categories');