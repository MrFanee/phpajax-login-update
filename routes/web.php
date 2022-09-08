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

// Route::get('/', function () {
//     return view('welcome');
// });

// Login
Route::get('/', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@check_login')->name('login.check_login');
// Register
Route::get('/register', 'RegisterController@index')->name('register.index');
Route::post('/register', 'RegisterController@store')->name('register.store');
// Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
Route::get('/profil', 'DashboardController@profil')->name('dashboard.profil');
// mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa.index');
Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');
Route::post('/mahasiswa/store', 'MahasiswaController@store')->name('mahasiswa.store');
Route::get('mahasiswa/delete/{id}', 'MahasiswaController@delete')->name('mahasiswa.delete');
// Dosen
Route::get('/dosen', 'DosenController@index')->name('dosen.index');
Route::get('/dosen/create', 'DosenController@create')->name('dosen.create');
Route::post('/dosen/store', 'DosenController@store')->name('dosen.store');
Route::get('/dosen/delete/{id_dosen}', 'DosenController@delete')->name('dosen.delete');

// Matakuliah
Route::get('/matkul', 'MatkulController@index')->name('matkul.index');
Route::get('/matkul/create', 'MatkulController@create')->name('matkul.create');
Route::post('/matkul/store', 'MatkulController@store')->name('matkul.store');
Route::get('/matkul/delete/{id_matkul}', 'MatkulController@delete')->name('matkul.delete');
// Export Data
Route::get('/xdata', 'ExportController@index')->name('xdata.index');


// logout
Route::get('/logout', 'DashboardController@logout')->name('dashboard.logout');

