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
    return view('dashboard');
});

Route::get('login','App\Http\Controllers\AuthController@login')->name('login');
Route::post('postlogin','App\Http\Controllers\AuthController@postlogin');
Route::get('logout','App\Http\Controllers\AuthController@logout');

Route::group(['middleware' => ['auth','CheckRole:admin']],function(){
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index');
    Route::get('/admin','App\Http\Controllers\AdminController@index');
    Route::get('/pengusul','App\Http\Controllers\PengusulController@index');
    Route::post('/pengusul/create','App\Http\Controllers\PengusulController@create');
    Route::get('/pengusul/{id}/edit','App\Http\Controllers\PengusulController@edit');
    Route::post('/pengusul/{id}/update','App\Http\Controllers\PengusulController@update');
    Route::get('/pengusul/{id}/delete','App\Http\Controllers\PengusulController@delete');
    Route::get('/pengusul/{id}/profile','App\Http\Controllers\PengusulController@profile');
});

Route::group(['middleware' => ['auth','CheckRole:admin,pengusul']],function(){
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index');
});

Route::group(['middleware' => ['auth','CheckRole:pengusul']],function(){
    Route::get('profilsaya','App\Http\Controllers\PengusulController@profilsaya');
});
