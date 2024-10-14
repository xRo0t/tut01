<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pageName = "home";
        return view(view: 'home.index', data: ['pname' => $pageName]); #view() is one of the global helper function. /xrt
    }
}

