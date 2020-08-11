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
