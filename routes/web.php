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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//トップページ//
Route::get('/top','UsersController@add')->middleware('auth');
//news index 表示
Route::get('news/index','NewsController@index')->middleware('auth');
//news edit 表示
Route::get('news/edit','NewsController@edit')->middleware('auth');
//ニュース作成画面表示//
Route::get('news/create', 'NewsController@add')->middleware('auth');
Route::post('news/create', 'NewsController@create')->middleware('auth');

//threads作成画面表示//
Route::get('threads/create','ThreadsController@add')->middleware('auth');
//threads一覧画面表示//
Route::get('threads/index','ThreadsController@index')->middleware('auth');
//threadsのコメント表示//
Route::get('threads/comment','Commentcontroller@add')->middleware('auth');
//threadsの編集画面表示//
Route::get('threads/edit','ThreadsController@edit')->middleware('auth');

//メンテナンスindex//
Route::get('/maintenance', 'MaintenanceController@add')->middleware('auth');
Route::get('/maintenance/register','MaintenanceController@adduser')->middleware('auth');

