<?php

namespace App\Http\Controllers;
use App\Models\Order;

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

    public function dashboard()
    {
        // Fetch all orders with their associated users
        $orders = Order::with('user')->latest()->get();

        // Return the dashboard view with the orders data
        return view('dashboard', compact('orders'));
    }

    public function admin_menu(){
        return view('admin_menu');
    }

    public function userprofile(){
        return view('profile/userprofile');
    }

    public function trashedFoodMenu(){
        return view('trashedFoodMenu');
    }
}
