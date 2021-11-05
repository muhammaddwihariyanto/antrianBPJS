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
Route::get('/register', 'Auth\AuthController@register')->name('register');
Route::post('/register', 'Auth\AuthController@storeUser');

Route::get('/login', 'Auth\AuthController@login')->name('login');
Route::post('/login', 'Auth\AuthController@authenticate');
Route::get('logout', 'Auth\AuthController@logout')->name('logout');

Route::get('/home', 'Auth\AuthController@home')->name('home');
//////////////////////// console \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('console/home','ConsoleController@consolehome')->name('consolehome');
Route::get('console/menu/bpjs','ConsoleController@consolemenubpjs')->name('consolemenubpjs');

Route::get('console/menu/nonbpjs','ConsoleController@consolemenunonbpjs')->name('consolemenunonbpjs');

///////////////////// Petugas Panggil \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('petugaspanggil/index','PetugasPanggilController@index')->name('index');

////////////////////Administrator \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('administrator/home','AdministratorController@administratorhome')->name('administratorhome');
Route::get('administrator/video','AdministratorController@administratorvideo')->name('administratorvideo');


///////////////// Display \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('display/index','DisplayController@index')->name('displayindex');