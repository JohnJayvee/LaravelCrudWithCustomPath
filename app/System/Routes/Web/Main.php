<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




    Route::get('/', function () {
        return view('welcome');
    });

    Route::get(
        '/home',
        ['uses' => 'HomeController@home', 'as' => 'home']
    );

    Route::get(
        '/admin/home',
        ['uses' => 'HomeController@home', 'as' => 'admin.home', 'middleware' => 'adminAuth']
    );
