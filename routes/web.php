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
    return view('dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/variabel','VariabelController@index');
Route::post('/variabel/store','VariabelController@store');
Route::get('variabel/delete/{id}','VariabelController@delete');
Route::get('variabel/edit/{id}','VariabelController@edit');
Route::put('variabel/update/{id}','VariabelController@update');

Route::get('/pertanyaan','PertanyaanController@index');
Route::post('/pertanyaan/store','PertanyaanController@store');
Route::get('pertanyaan/delete/{id}','PertanyaanController@delete');
Route::get('pertanyaan/edit/{id}','PertanyaanController@edit');
Route::put('pertanyaan/update/{id}','PertanyaanController@update');

Route::get('/transaction','TransactionDataController@index');
Route::post('/transaction/store','TransactionDataController@store');
Route::get('transaction/delete/{id}','TransactionDataController@delete');
Route::get('transaction/edit/{id}','TransactionDataController@edit');
Route::put('transaction/update/{id}','TransactionDataController@update');
