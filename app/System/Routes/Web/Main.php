<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




    Route::get('/', function () {
        return view('welcome');
    });

    Route::get(
        '/home',
        ['uses' => 'MainController@home', 'as' => 'home']
    );

    Route::get(
        '/admin/home',
        ['uses' => 'MainController@home', 'as' => 'admin.home', 'middleware' => 'adminAuth']
    );
