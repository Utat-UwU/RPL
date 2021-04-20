<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Index(){
        return view('pages.index');
    }

    public function welcome(){
        return view('pages.index');
    }

    public function login(){
        return view('pages.login');
    }
}
