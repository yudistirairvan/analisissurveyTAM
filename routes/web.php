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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','VariabelController@index');
Route::post('/variabel/store','VariabelController@store');
Route::get('variabel/delete/{id}','VariabelController@delete');
Route::get('variabel/edit/{id}','VariabelController@edit');
Route::put('variabel/update/{id}','VariabelController@update');
