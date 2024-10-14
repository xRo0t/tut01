<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $pageName = "login";
        return view(view: 'login.index', data: ['pname' => $pageName,]); #view() is one of the global helper function. /xrt
    }
}
