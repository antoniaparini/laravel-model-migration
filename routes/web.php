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

/**
 * Route::get('/', 'HomeController@nomemetodo')->name('homepage');
 * Il nomemetodo deve essere riportato in HomeController o nel relativo controller
 */
Route::get('/', 'HomeController@index')->name('homepage');
