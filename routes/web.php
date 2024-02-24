<?php

use Illuminate\Support\Facades\Route;

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
Route::get('networkcable/', function () {
    return view('networkcable');
});

Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
Route::get('view-records','StudViewController@index');

Route::get('edit-records','StudUpdateController@index');
Route::get('editRecords/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');

//vikas code starts
Route::get('/edit/{id}', 'StudUpdateController@showEditForm');
Route::post('/update/{id}', 'StudUpdateController@update');
//vikas code ends

Route::get('delete-records','StudUpdateController@index');
Route::get('delete/{id}','StudUpdateController@destroy');
