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

include ('routes_new.php');

// logout
Route::get('/logout', 'DashboardController@logout')->name('dashboard.logout');


?>
