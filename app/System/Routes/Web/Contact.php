<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group([
    // 'as' => "web.",
    'namespace' => "Web",
    'middleware' =>"auth"
    // 'domain' => env('SYSTEM_URL',''),
], function () {


    // Route::middleware(['auth'])->group(function () {

    Route::get(
        '/contacts/test',
        ['uses' => 'ContactController@test', 'as' => 'contact.test',]
    );

    Route::get(
        '/contacts',
        ['uses' => 'ContactController@index', 'as' => 'contact.index',]
    );
    Route::get(
        '/contacts/create',
        ['uses' => 'ContactController@create', 'as' => 'contact.create',]
    );
    Route::get(
        '/contacts/{id}',
        ['uses' => 'ContactController@show', 'as' => 'contact.show',]
    );
    Route::get(
        '/contacts/edit/{id}',
        ['uses' => 'ContactController@edit', 'as' => 'contact.edit',]
    );
    Route::post(
        '/contacts/store',
        ['uses' => 'ContactController@store', 'as' => 'contact.store',]
    );
    Route::put(
        '/contacts/update/{id}',
        ['uses' => 'ContactController@update', 'as' => 'contact.update',]
    );
    Route::delete(
        '/contacts/delete/{id}',
        ['uses' => 'ContactController@destroy', 'as' => 'contact.destroy',]
    );
    // });
});
