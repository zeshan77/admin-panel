<?php
Route::group(['namespace' => 'Zeshan77\zAdmin\Http\Controllers', 'prefix' => 'admin'], function() {
    Route::group(['namespace' => 'Auth'], function() {
        Route::get('/', 'LoginController@index');
        Route::get('/', 'LoginController@index');
        Route::get('/login', 'LoginController@index');
        Route::get('/forgot-password', 'ForgotPasswordController@index');
    });

    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/two_col', 'DashboardController@twoColumns');
});
