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

Route::get('/', 'Frontendcontroller@index')->name('welcome');

Auth::routes([
    'register'=>false
]);

// Route::get('/home', 'HomeController@index')->name('home');
// Admin route
Route::group(['prefix'=>'admin','middleware' => 'auth','namespace'=>'Admin'], function () {
    Route::get('/', function () {
return view('admin.login');
    });
  Route::get('dashboard','DhashboardController@index')->name('admin.dashboard');
//   Route::get('/welcome','DhashboardController@welcome')->name('welcome');
   Route::resource('slider', 'SliderController');
   Route::resource('category', 'CategoryController');
   Route::resource('item', 'ItemController');
//    Route::get('restaurantinfo','RestaurantInfoController@index')->name('restaurantinfo.index');
   Route::get('restaurantinfo','RestaurantInfoController@index')->name('restaurantinfo.index');
   Route::get('restaurantinfo/edit/{id}','RestaurantInfoController@edit')->name('restaurantinfo.edit');
   Route::post('restaurantinfo/update/{id}','RestaurantInfoController@update')->name('restaurantinfo.update');
   Route::get('contact','ContactController@index')->name('contact.index');
   Route::get('contact/show/{id}','ContactController@show')->name('contact.show');
   Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');
   Route::get('reservation','ReservationController@index')->name('reservation.index');
   Route::post('reservation/{id}','ReservationController@statusChange')->name('reservation.confirm');
   Route::delete('reservation/{id}','ReservationController@destroy')->name('reservation.destroy');
});

Route::post('/reservation', 'ReservationController@reservation')->name('reservation.reserve');
Route::post('/contact', 'ContactController@contact')->name('contact.store');



