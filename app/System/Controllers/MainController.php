<?php

namespace App\System\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {

        return view('home');
    }

    public function admin()
    {
        return view('home');
    }
}
