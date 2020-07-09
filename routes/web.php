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
Route::get('restricted', 'AdminController@index');

Route::get('anime/{$id}', function () {
    return view('anime');
});

Route::get('/', function () {
return view('welcome');
});

Route::get('restricted/login', function () {
return view('login');
});

Route::get('page', function () {
return view('page');
});

Route::get('about', function () {
return view('about');
});

Route::get('team', function () {
return view('team');
});

Route::get('contact', function () {
return view('contact');
});
