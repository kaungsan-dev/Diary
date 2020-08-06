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

Route::get('diary','DiaryController@diary')->name('diary.diary');
Route::get('diary/create','DiaryController@create');
Route::post('diary/save','DiaryController@save')->name('save.diary');
Route::get('diary/edit/{id}','DiaryController@edit')->name('edit.diary');
Route::post('diary/update/{id}','DiaryController@update')->name('update.diary');
Route::get('diary/delete/{id}','DiaryController@delete')->name('delete.diary');
Route::get('diary/view/{id}','DiaryController@view')->name('view.diary');