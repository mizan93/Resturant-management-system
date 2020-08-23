<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'register'=>false
]);

Route::get('/home', 'HomeController@index')->name('home')
;

Route::group(['prefix'=>'admin','middleware' => 'auth','namespace'=>'Admin'], function () {
    Route::get('/', function () {
return view('admin.login');
    });
  Route::get('dashboard','DhashboardController@index')->name('admin.dashboard');
  Route::get('/welcome','DhashboardController@welcome')->name('welcome');
   Route::resource('slider', 'SliderController');
   Route::resource('category', 'CategoryController');
});
