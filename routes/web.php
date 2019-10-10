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
Route::get('/student','MahasiswaController@index');
    //Mahasiswa
Route::get('/admin_mahasiswa','StudentsController@index');
Route::get('/admin_mahasiswa/create','StudentsController@create');
Route::get('/admin_mahasiswa/{student}','StudentsController@show');
Route::post('/admin_mahasiswa','StudentsController@store');
Route::delete('/admin_mahasiswa/{student}','StudentsController@destroy');
Route::get('/admin_mahasiswa/edit/{student}','StudentsController@edit');
Route::patch('/admin_mahasiswa/update/{student}','StudentsController@update');
    //Pengumuman
Route::get('/admin_pengumuman','AnnouncementsController@index');
Route::get('/admin_pengumuman/create','AnnouncementsController@create');
Route::get('/admin_pengumuman/{announcement}','AnnouncementsController@show');
Route::post('/admin_pengumuman','AnnouncementsController@store');
Route::delete('/admin_pengumuman/{announcement}','AnnouncementsController@destroy');
Route::get('/admin_pengumuman/edit/{announcement}','AnnouncementsController@edit');
Route::patch('/admin_pengumuman/update/{announcement}','AnnouncementsController@update');
// Route::get('/admin_mahasiswa/{student}','StudentsController@show');
// Route::resource('/admin_mahasiswa','StudentsController');
