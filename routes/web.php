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
    return redirect()->away('home');
});
Route::get('/register', 'Auth\AuthController@register')->name('register');
Route::post('/register', 'Auth\AuthController@storeUser');

Route::get('/login', 'Auth\AuthController@login')->name('login');
Route::post('/login', 'Auth\AuthController@authenticate');
Route::get('logout', 'Auth\AuthController@logout')->name('logout');

 Route::get('/', 'Auth\AuthController@home')->name('home');
//////////////////////// console \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('console/home','ConsoleController@consolehome')->name('consolehome');
Route::get('console/menu/admisi_poli','ConsoleController@admisi_poli')->name('admisi_poli');

Route::get('console/menu/bpjs','ConsoleController@consolemenubpjs')->name('consolemenubpjs');
Route::post('console/menu/bpjs/daftar','ConsoleController@daftarpasienbpjs')->name('daftarpasienbpjs');
Route::get('console/menu/nonbpjs','ConsoleController@consolemenunonbpjs')->name('consolemenunonbpjs');
Route::post('console/menu/nonbpjs/daftar','ConsoleController@daftarpasiennonbpjs')->name('daftarpasiennonbpjs');
Route::get('console/menu/pesertalama','ConsoleController@pesertalama')->name('pesertalama');
///////////////////// Petugas Panggil \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('petugaspanggil/index/{loket}','PetugasPanggilController@index')->name('index');
Route::get('petugaspanggil/updatestatus1/{noantrian}/{tanggal}/{loket}','PetugasPanggilController@updatestatus1')->name('updatestatus1');
Route::get('petugaspanggil/updatestatustidakhadir/{noantrian}/{tanggal}/{loket}','PetugasPanggilController@updatestatustidakhadir')->name('updatestatustidakhadir');
Route::get('petugaspanggil/updatestatuslewati/{noantrian}/{tanggal}/{loket}','PetugasPanggilController@updatestatuslewati')->name('updatestatuslewati');
Route::get('petugaspanggil/updatestatuswaktupanggil/{noantrian}','PetugasPanggilController@updatestatuswaktupanggil')->name('updatestatuswaktupanggil');

Route::post('petugaspanggil/daftarantrianadmisi','PetugasPanggilController@daftarantrianadmisi')->name('daftarantrianadmisi');

////////////////////Administrator \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('administrator/home','AdministratorController@administratorhome')->name('administratorhome');
Route::get('administrator/video','AdministratorController@administratorvideo')->name('administratorvideo');


///////////////// Display \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('display/index','DisplayController@index')->name('displayindex');