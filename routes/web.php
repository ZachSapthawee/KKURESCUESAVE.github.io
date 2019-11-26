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
Auth::routes();

Route::get('/', function () {
    return view('/auth.login');
});

Route::get('/index', function () {
    return view('pages.index');
});
Route::get('/show', function () {
    return view('pages.show');
});




// Route::get('/test', 'PersoanlController@index')->name('home');

Route::get('create','SelectFacultyController@index');
Route::resource('/pages','PersonalController');
Route::post('create/query','SelectFacultyController@fetch')->name('create.fetch');
Route::get('/show','API\ShowPatientController@index');
Route::get('/pages/{page}/edit','PersonalController@edit');
Route::get('/delete','PersonalController@destroy');
Route::post('update_personal','PersonalController@update_Personal');
Route::get('/edit','SelectFacultyController@editshow');



