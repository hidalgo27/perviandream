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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home_path',
]);
Route::get('/peru-reiseziele', [
    'uses' => 'HomeController@destinations',
    'as' => 'destinations_path',
]);
Route::get('/rundreise', [
    'uses' => 'HomeController@tours',
    'as' => 'tours_path',
]);
Route::get('/reisebausteine', [
    'uses' => 'HomeController@packages',
    'as' => 'packages_path',
]);
Route::get('/uber-uns', [
    'uses' => 'HomeController@uns',
    'as' => 'uns_path',
]);
Route::get('/package/{title}', [
    'uses' => 'HomeController@itinerary',
    'as' => 'itinerary_path',
]);
