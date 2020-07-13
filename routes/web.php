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

Route::get('/cek-object', 'MahasiswaController@cekObject');
Route::get('/insert', 'MahasiswaController@insert');
Route::get('/update', 'MahasiswaController@updateORM');
Route::get('/update-where', 'MahasiswaController@updateWhere');
Route::get('/delete', 'MahasiswaController@deleteORM');
Route::get('/all', 'MahasiswaController@all');
Route::get('/all-view', 'MahasiswaController@allView');
Route::get('/get-where', 'MahasiswaController@getWhere');
Route::get('/test-where', 'MahasiswaController@testWhere');
Route::get('/first', 'MahasiswaController@first');
Route::get('/find', 'MahasiswaController@find');
Route::get('/latest', 'MahasiswaController@latest');
Route::get('/limit', 'MahasiswaController@limit');
Route::get('/mass-assignment', 'MahasiswaController@massAssignment');
Route::get('/mass-update', 'MahasiswaController@massUpdate');


//Sisteman CRUD
//route menampilkan data Mahasiswa
Route::get('/mahasiswas', 'MahasiswaController@index')->name('mahasiswas.index')
->middleware('auth');
//route mengakses view form registrasi Mahasiswa
Route::get('/mahasiswas/create', 'MahasiswaController@create')->name('mahasiswas.create')
->middleware('auth');
//route untuk proses simpan data Mahasiswa
Route::post('/mahasiswas', 'MahasiswaController@store')->name('mahasiswas.store');
//route untuk mengakses detail data
Route::get('/mahasiswas/{mahasiswa}', 'MahasiswaController@detail')->name('mahasiswas.detail')
->middleware('auth');
//route untuk menampilkan form update
Route::get('/mahasiswas/{mahasiswa}/edit', 'MahasiswaController@edit')->name('mahasiswas.edit')
->middleware('auth');
//Route untuk update data ke dalam database
Route::put('/mahasiswas/{mahasiswa}', 'MahasiswaController@update')
->name('mahasiswas.update');
//route untuk menghapus Mahasiswa
Route::delete('/mahasiswas/{mahasiswa}', 'MahasiswaController@delete')->name('mahasiswas.delete')
->middleware('auth');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');