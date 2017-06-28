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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/users','Users\Users@index')->name('Users') ;
Route::get('/users/add','Users\Users@add') ;
Route::post('/users/insert','Users\Users@insert') ;
Route::get('/users/delete/{id}','Users\Users@delete') ;
Route::get('/users/edit/{id}','Users\Users@edit') ;
Route::post('/users/update','Users\Users@update') ;

Route::get('/gosp/plan','Gosp\Plan@index');
