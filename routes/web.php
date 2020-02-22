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

// 言語切り替え
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);


Route::get('/', 'WasabiController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('');

Route::get('/text/index', 'TeachTextController@index');

// お問い合わせページ
Route::get('/inquiry/index', 'InquiryController@index');

Route::get('/inquiry/add', 'InquiryController@add');
Route::post('/inquiry/add', 'InquiryController@add');

Route::post('/inquiry/confirm', 'InquiryController@confirm');

Route::post('/inquiry/done', 'InquiryController@done');
