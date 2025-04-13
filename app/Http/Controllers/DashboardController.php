<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the DasboardPages.
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    {
        return view('Dashboard.welcome');
    }

    public function blog()
    {
        return view('Dashboard.blog');
    }

    public function publish()
    {
        return view('Dashboard.publish');
    }

    
}
