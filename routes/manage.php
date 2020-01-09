<?php

/*
|--------------------------------------------------------------------------
| Manage Routes
|--------------------------------------------------------------------------
|
| Here is where you can register manage routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "manage" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'cPanel', 'guard' => 'manage'], function() {
    //Auth Route
    Route::get('/login', 'AuthController@showLoginForm')->name('manage.login');
    Route::post('/login', 'AuthController@login');

    Route::group(['middleware' => 'auth.manage'], function() {
        //Auth Route
        Route::post('/logout', 'AuthController@logout')->name('manage.logout');

        //Dashboard Route
        Route::get('/', 'DashboardController@index')->name('manage.index');

        //Role Route
        Route::get('/', 'RoleController@index')->name('manage.role.index');
    });
});
