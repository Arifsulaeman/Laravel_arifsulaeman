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
//route::get('mhs', 'datamahasiswaControllers@index');

Auth::routes();

Route::get('mhs', 'datamahasiswaControllers@index');
Route::get('/mhs_list', 'datamahasiswaControllers@mhs_list')->name('mhs_list');
Route::get('/mhs/create', 'mahasiswaController@create');
Route::post('/mhs/store', 'mahasiswaController@store');
Route::get('/mhs/edit/{nim}', 'datamahasiswaController@edit');
Route::put('/mhs/update/{mahasiswa:nim}', 'datamahasiswaController@update')->name('mhs.update');
Route::get('/mhs/delete/{mahasiswa:nim}', 'datamahasiswaController@destroy')->name('mhs.delete');
//Dosen (Route Framework)
Route::get('/dosen', 'DosenController@index')->name('dosen.index');
Route::get('/dosen_list', 'DosenController@dosen_list')->name('dosen_list');
Route::get('/dosen/create', 'DosenController@create');
Route::post('/dosen/store', 'DosenController@store');
Route::get('/dosen/edit/{kode_dosen}', 'DosenController@edit');
Route::put('/dosen/update/{dosen:kode_dosen}', 'DosenController@update')->name('dosen.update');
Route::get('/dosen/delete/{dosen:kode_dosen}', 'DosenController@destroy')->name('dosen.delete');
