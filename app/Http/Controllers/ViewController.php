<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
     public function PageIndex()
    {
        return view('index');
    }
    public function PageAboutUs()
    {
        return view('home\aboutus');
    }
    public function PageBlog()
    {
        return view('home\blog');
    }public function PageCart()
    {
        return view('home\cart');
    }
    public function PageAccount()
    {
        return view('home\account');
    }
    public function PageAdmin()
    {
        return view('admin\dashboard');
    }
}
