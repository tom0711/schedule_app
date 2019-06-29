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


Route::get('/', function () {
    return view('wasabi');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('inquiry/index', 'InquiryController@index');
Route::post('inquiry/index', 'InquiryController@confirm');
