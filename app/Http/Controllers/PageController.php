<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function menu(){
        return view('menu');
    }

    public function login(){
        return view('auth/login');
    }

    public function signup(){
        return view('auth/signup');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function admin_menu(){
        return view('admin_menu');
    }

    public function userprofile(){
        return view('profile/userprofile');
    }
}
