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

Route::get('students', 'StudentController@index')->name('students');
Route::get('classes', 'ClassRoomController@index')->name('classes');
Route::get('classes/add', 'ClassRoomController@crateForm')->name('classes.add-form');
Route::post('classes/saveAdd', 'ClassRoomController@saveAdd')->name('classes.save-add');

Route::get('input', 'SumController@sumView')->name('sum-view');
Route::post('sum', 'SumController@sum')->name('sum');

Route::get('/admins', function () {
    return view('admins');
});

Route::get('/users', function () {
    return view('users');
});
Route::get('/admin_temp', function (){
	return view('admin.master');
});
