<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@index');

Route::get('info/{id}','GoodsController@info')->name('info');

Route::get('list/{id?}_{machines?}_{brands?}_{type?}','CategoryController@index')->name('list');
