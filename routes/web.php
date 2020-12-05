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


//Admintration

Route::prefix('admin')->group(function () {
    Route::get('login', 'AdminController@LoginAdmin')->name('LoginAdmin');
    Route::get('board', 'AdminController@BoardAdmin')->name('BoardAdmin');
});
