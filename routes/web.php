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

// Page
Route::get('/', 'PagesController@index');

Route::get('/Home', 'PagesController@home');

Route::get('/About', 'PagesController@about');

// Mahasiswa
Route::get('/Mahasiswa', 'MahasiswaController@index');

// Student
Route::get('/Student', 'StudentController@index');
Route::get('/Student/create', 'StudentController@create');
Route::get('/Student/{student}', 'StudentController@show');
Route::post('/Student', 'StudentController@store');
