<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group([
    // 'as' => "web.",
    'namespace' => "Web",
    'middleware' => "auth"
    // 'domain' => env('SYSTEM_URL',''),
], function () {

    Route::get(
        'users/',
        ['uses' => 'UsersController@index', 'as' => 'user.index',]
    );

    Route::get(
        'users/{id}/edit',
        ['uses' => 'UsersController@edit', 'as' => 'user.edit',]
    );
/**
 *
 */
    Route::post(
        'users/store',
        ['uses' => 'UsersController@store', 'as' => 'user.store',]
    );

    Route::get(
        'users/{id}',
        ['uses' => 'UsersController@show', 'as' => 'user.show',]
    );

    Route::delete(
        'users/{id}',
        ['uses' => 'UsersController@destroy', 'as' => 'user.destroy',]
    );

});
