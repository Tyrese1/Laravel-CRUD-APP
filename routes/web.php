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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    return 'Goodbye';
});

//Controller for rooms
Route::get('/rooms/{roomType?}', 'ShowRoomsController');

// //Manage booking
// Route::get('/bookings', 'BookingController@Index');
// Route::get('/bookings/create', 'BookingController@Create');
// Route::post('/bookings', 'BookingController@Store');
// //Check if record match is found on the DB Route model binding iD path and Url
// Route::get('/bookings/{booking}', 'BookingController@show');
// //Edit
// Route::get('/bookings/{booking}/edit', 'BookingController@edit');
// //Sumit forms
// Route::put('/bookings/{booking}', 'BookingController@update');
// //Delete records
// Route::delete('/bookings/{booking}', 'BookingController@destroy');

// Route::post('/bookings', 'BookingController@Store');

Route::resource('bookings', 'BookingController');
