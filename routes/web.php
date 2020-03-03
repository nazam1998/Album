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

Route::get('/user','UsersController@index')->name('user');
Route::get('/addUser','UsersController@create')->name('addUser');
Route::post('/saveUser','UsersController@store')->name('saveUser');
Route::get('/editUser{id}','UsersController@edit')->name('editUser');
Route::post('/updateUser{id}','UsersController@update')->name('updateUser');
Route::get('/deleteUser{id}','UsersController@destroy')->name('deleteUser');


Route::get('/album','AlbumsController@index')->name('album');
Route::get('/addAlbum','AlbumsController@create')->name('addAlbum');
Route::post('/saveAlbum','AlbumsController@store')->name('saveAlbum');
Route::get('/editAlbum/{id}','AlbumsController@edit')->name('editAlbum');
Route::post('/updateAlbum/{id}','AlbumsController@update')->name('updateAlbum');
Route::get('/deleteAlbum/{id}','AlbumsController@destroy')->name('deleteAlbum');

Route::get('/showAlbum/{id}','AlbumsController@show')->name('showAlbum');

Route::get('/photo','PhotoController@index')->name('photo');
Route::get('/addPhoto','PhotoController@create')->name('addPhoto');
Route::post('/savePhoto','PhotoController@store')->name('savePhoto');
Route::get('/editPhoto/{id}','PhotoController@edit')->name('editPhoto');
Route::post('/updatePhoto/{id}','PhotoController@update')->name('updatePhoto');
Route::get('/deletePhoto/{id}','PhotoController@destroy')->name('deletePhoto');

Route::get('/showPhoto/{id}','PhotoController@show')->name('showPhoto');