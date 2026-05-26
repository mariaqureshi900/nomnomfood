<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function restaurants()
    {
        return view('restaurants.index');
    }

    public function offers()
    {
        return view('offers.index');
    }

    public function categories()
    {
        return view('categories.index');
    }

    public function contact()
    {
        return view('contact.index');
    }
}