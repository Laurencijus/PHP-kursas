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

Route::get('course/all', 'CourseController@all')->name('course_all');

Route::get('course/{id}', 'CourseController@show')->name('course_view');
Route::get('course/{id}/edit', 'CourseController@edit')->name('course_edit');
Route::post('course/{id}/update', 'CourseController@update')->name('course_update');
