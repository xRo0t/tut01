<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController; //its important to include the class file of the login and Home and etc..
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersTableController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

// note: the get below is not getter method, its just a get http request function, that why its takes parameters
/*
Route::get(uri: '/', 
action: function (){
        $pageName = "home";   
        return view(view: "home.index", data: ["pname" => $pageName,]); //callback function
    }
);
*/
Route::get(uri: "/", action: [HomeController::class, "index"]);
Route::get(uri: '/login', action: [LoginController::class, 'index']);
Route::get(uri: '/users', action: [UsersTableController::class, 'index']);
Route::get(uri: '/users/{id}', action: [UsersTableController::class,'show']);

// HomeController::class; = patloginh to file

// the get() is static method of the Route class 
/*
its build like :
    Class Test
    {
        public static function mymethod()
        {
            //process
        } // note the get method above is note really a static function, you can search later.
    }<?php


    calling "
               Test::mymethod() this is how they used the class method or calling it,
               note! the '::' is called scope resolution operator.
               Test::mymethod or Route::get is like, call the method 'get' of the class 'Route'.
    "
*/

/*
our start to create the website in laravel:
    1- define new route so the users can access it by the browser inside the web.php file.
    2- define controllers and its actions (functions) for the routes, that renders the views
    3- define/create views and use blade template engine to render them
*/
