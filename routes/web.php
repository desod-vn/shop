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
    Route::get('/', 'AdminController@BoardAdmin');
    Route::get('login', 'AdminController@LoginAdmin')->name('LoginAdmin');

    //Thư mục
    Route::prefix('types')->group(function () {
        Route::get('/', 'TypeController@index')->name('ViewType');

        Route::get('new', 'TypeController@getNew');
        Route::post('new', 'TypeController@postNew');

        Route::get('update/{id}', 'TypeController@getUpdate');
        Route::post('update/{id}', 'TypeController@postUpdate');

        Route::get('delete/{id}', 'TypeController@getDelete');
        Route::get('delete-sure/{id}', 'TypeController@delete');
    });

    //Thông báo
    Route::prefix('notifications')->group(function () {
        Route::get('/', 'NotificationController@index')->name('ViewNotification');

        Route::get('new', 'NotificationController@getNew');
        Route::post('new', 'NotificationController@postNew');

        Route::get('update/{id}', 'NotificationController@getUpdate');
        Route::post('update/{id}', 'NotificationController@postUpdate');

        Route::get('delete/{id}', 'NotificationController@delete');
    });

    //Sản phẩm
    Route::prefix('products')->group(function () {
        Route::get('/', 'ProductController@index')->name('ViewProduct');

        Route::get('new', 'ProductController@getNew');
        Route::post('new', 'ProductController@postNew');

        Route::get('update/{id}', 'ProductController@getUpdate');
        Route::post('update/{id}', 'ProductController@postUpdate');

        Route::get('delete/{id}', 'ProductController@getDlete');
        Route::get('delete-sure/{id}', 'ProductController@delete');
    });

});