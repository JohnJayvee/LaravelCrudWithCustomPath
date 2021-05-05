<?php

use Illuminate\Support\Facades\Route;

Route::group([
    // 'as' => "web.",
    'namespace' => "Auth"
    // 'domain' => env('SYSTEM_URL',''),
], function () {

    Route::get(
        'register',
        'RegisterController@register'
    );
    Route::post(
        'register',
        ['uses' => 'RegisterController@storeUser', 'as' => 'register']
    );

    Route::get(
        'login',
        ['uses' => 'LoginController@login', 'as' => 'login']
    );
    Route::post(
        'login',
        'LoginController@authenticate'
    );
    Route::get(
        'logout',
        ['uses' => 'LoginController@logout', 'as' => 'logout']
    );

    Route::get(
        'forget-password',
        'ForgotPasswordController@getEmail'
    );
    Route::post(
        'forget-password',
        'ForgotPasswordController@postEmail'
    );

    Route::get(
        'reset-password/{token}',
        'ResetPasswordController@getPassword'
    );

    Route::post(
        'reset-password',
        'ResetPasswordController@updatePassword'
    );

    Route::get(
        '/changePassword',
        ['uses' => 'ChangePasswordController@index', 'as' => 'changePassword']
    );
    Route::post(
        '/changePassword',
        ['uses' => 'ChangePasswordController@changePassword', 'as' => 'change.password']
    );
});
