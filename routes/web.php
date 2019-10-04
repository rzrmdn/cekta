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
//Homepages
Route::get('/','PagesController@index');

//Admin
Route::get('/admin','AdminController@index');
    //Mahasiswa
Route::get('/admin_mahasiswa','StudentsController@index');
Route::get('/admin_mahasiswa/create','StudentsController@create');
Route::get('/admin_mahasiswa/{student}','StudentsController@show');
Route::post('/admin_mahasiswa','StudentsController@store');
Route::delete('/admin_mahasiswa/{student}','StudentsController@destroy');
Route::get('/admin_mahasiswa/edit/{id}','StudentsController@edit');
Route::put('/admin_mahasiswa','StudentsController@update');
// Route::get('/admin_mahasiswa/{student}','StudentsController@show');
// Route::resource('/admin_mahasiswa','StudentsController');
