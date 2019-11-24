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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/index', function () {
    return view('pages.index');
});
Route::get('/show', function () {
    return view('user.show');
});

Auth::routes();


// Route::get('/test', 'PersoanlController@index')->name('home');

Route::get('createT','SelectFacultyController@index');
Route::get('create','PersonalController@index');
Route::resource('/user','PersonalController');
Route::post('/create/fetch','SelectFacultyController@fetch')->name('create.fetch');