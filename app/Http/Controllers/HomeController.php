<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('home_0234');
    }

    function artikel()
    {
        return view('artikel_0234');
    }
    function contact()
    {
        return view('contact_0234');
    }
}