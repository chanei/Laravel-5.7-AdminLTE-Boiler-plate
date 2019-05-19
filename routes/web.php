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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('audittrails', 'AuditTrailController');

Route::resource('profile', 'ProfileController');

Route::resource('users', 'UserController');

Route::get('advancedforms', 'FormController@advancedForms');
Route::resource('forms', 'FormController');

Route::get('simpletables', 'TableController@simpleTables');
Route::resource('datatables', 'TableController');

Route::resource('export', 'ExcelController');
