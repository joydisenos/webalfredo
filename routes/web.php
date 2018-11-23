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
Route::get('/perfil', 'HomeController@perfil')->name('perfil');
Route::get('/codigos', 'HomeController@codigos')->name('codigos');
Route::get('/pagos', 'HomeController@pagos')->name('pago');
Route::get('/admin/impuestos', 'AdminController@impuestos')->name('admin');

