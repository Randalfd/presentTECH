<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function home_login()
    {
        return view('login');
    }

    public function home_register()
    {
        return view('register');
    }
}
