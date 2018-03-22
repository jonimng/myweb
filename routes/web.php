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
Route::resource('home', 'HomeController');

Route::middleware(['auth'])->group(function () {
/*Route::get('/home', 'HomeController@index')->name('home');*/
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/client', 'ClientController@index')->name('client');
Route::resource('companies', 'CompaniesController');
Route::resource('emails', 'EmailsController');
Route::resource('files', 'FilesController');
Route::resource('invoices', 'InvoicesController');
Route::resource('users', 'UsersController');
Route::resource('home', 'HomeController');
});

