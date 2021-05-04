<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function contact(){
        return view('pages.contacts');
    }
    public function register(){
        return view('pages.register');
    }
}