<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;


// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |

			// DASHBOARD ROUTES

Route::get('/','App\Http\Controllers\HomeController@home');
Route::get('/dashbaord2','App\Http\Controllers\HomeController@dashbaord2');
Route::get('/dashbaord3','App\Http\Controllers\HomeController@dashbaord3');

 			// TEACHERS CDM --- ROUTES

Route::resource('teachers', TeacherController::class);
Route::get('/classes','App\Http\Controllers\classesController@index');
Route::get('/classes/create','App\Http\Controllers\classesController@create');
Route::post('/classes/store','App\Http\Controllers\classesController@store');

			// COUNTRY CDM --- ROUTES

Route::resource('countrys', CountryController::class);
Route::get('/country/','App\Http\Controllers\countrysController@index');
Route::get('/country/city','App\Http\Controllers\countryController@city');
