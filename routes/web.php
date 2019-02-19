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

Route::get('/', function () {
    return view('welcome');
});

// Resource routes of the base pages. For more info on Resource Routes, see the
// Laravel documentation on Resource Controllers:
// https://laravel.com/docs/5.8/controllers#resource-controllers
Route::resource('/matches', 'MatchController');
Route::resource('/results', 'ResultController');
Route::resource('/rankings', 'RankingController');

// Other routes here...
