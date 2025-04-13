<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display the homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('Frontend.index');
    }

    public function about()
    {
        return view('Frontend.about');
    }

    public function testimonials()
    {
        return view('Frontend.testimonials');
    }

    public function contact()
    {
        return view('Frontend.contact');
    }

    public function details()
    {
        return view('Frontend.details');
    }

    // registration

    public function register()
    {
        return view('Auth.register');
    }

    public function users()
    {
        return view('Auth.users');
    }

    public function partners()
    {
        return view('Auth.partners');
    }

    public function login()
    {
        return view('Auth.login');
    }

    public function forgot()
    {
        return view('Auth.forgot');
    }

    public function enter()
    {
        return view('Auth.enter');
    }

    public function newpassword()
    {
        return view('Auth.newpassword');
    }
    
}
