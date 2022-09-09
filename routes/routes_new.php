<?php

use Illuminate\Support\Facades\Route;


// User
Route::get('/user', 'DashboardController@user')->name('dashboard.user');
Route::get('/user/delete/{id}', 'DashboardController@delete')->name('dashboard.user.delete');

// mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa.index');
Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');
Route::post('/mahasiswa/store', 'MahasiswaController@store')->name('mahasiswa.store');
Route::get('/mahasiswa/delete/{id}', 'MahasiswaController@delete')->name('mahasiswa.delete');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::post('/mahasiswa/update', 'MahasiswaController@update')->name('mahasiswa.update');

// Dosen
Route::get('/dosen', 'DosenController@index')->name('dosen.index');
Route::get('/dosen/create', 'DosenController@create')->name('dosen.create');
Route::post('/dosen/store', 'DosenController@store')->name('dosen.store');
Route::get('/dosen/delete/{id_dosen}', 'DosenController@delete')->name('dosen.delete');
Route::get('/dosen/edit/{id_dosen}', 'DosenController@edit')->name('dosen.edit');
Route::post('/dosen/update', 'DosenController@update')->name('dosen.update');

// Matakuliah
Route::get('/matkul', 'MatkulController@index')->name('matkul.index');
Route::get('/matkul/create', 'MatkulController@create')->name('matkul.create');
Route::post('/matkul/store', 'MatkulController@store')->name('matkul.store');
Route::get('/matkul/delete/{id_matkul}', 'MatkulController@delete')->name('matkul.delete');
Route::get('/matkul/edit/{id_matkul}', 'MatkulController@edit')->name('matkul.edit');
Route::post('/matkul/update', 'MatkulController@update')->name('matkul.update');

// Export Data
Route::get('/xdata', 'ExportController@index')->name('xdata.index');



?>
