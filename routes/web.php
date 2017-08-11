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
Route::post('/czat/insert','HomeController@insert') ;

Route::get('/mail/odbiorcza','Ogol\Mail@index'); 
Route::get('/mail/nadawcza','Ogol\Mail@sended'); 
Route::get('/mail/kosz','Ogol\Mail@del'); 
Route::get('/mail/utworz','Ogol\Mail@write'); 
Route::get('/mail/utworz/{id}','Ogol\Mail@write'); 
Route::get('/mail/czytaj/{id}','Ogol\Mail@read') ;
Route::post('/mail/wyslij','Ogol\Mail@send') ;

Route::get('/gosp/plan','Gosp\Plan@index');

Route::get('/gosp/zwierzyna','Gosp\Zwierzyna@index');
Route::get('/gosp/zwierzyna/jelen','Gosp\Zwierzyna@jelen');

Route::get('/gosp/urzadzenia','Gosp\Urzadzenia@index');
Route::get('/gosp/urzadzenia/{id}','Gosp\Urzadzenia@show') ;

Route::get('/ewid/mysliwi','Ewid\Mysliwi@index');
Route::get('/ewid/mysliwi/{id}','Ewid\Mysliwi@show') ;

Route::get('/ewid/psy','Ewid\Psy@index');
Route::get('/ewid/psy/{id}','Ewid\Psy@show') ;

Route::get('/gosp/prace','Gosp\Prace@index');
Route::get('/gosp/prace/{id}','Gosp\Prace@show') ;

Route::get('/gosp/zadania','Gosp\Zadania@index');
Route::get('/gosp/zadania/{id}','Gosp\Zadania@show') ;

