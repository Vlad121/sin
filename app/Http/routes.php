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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category/{id?}', array ('as' => 'category.get', 'uses' => 'CategoryController@get'));
Route::post('/category/{id?}', array ('as' => 'category.post', 'uses' => 'CategoryController@create'));


Route::get('/article/{id?}', array ('as' => 'article.get', 'uses' => 'ArticleController@get'));
Route::post('/article/{id?}', array ('as' => 'article.get', 'uses' => 'ArticleController@post'));


