<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function homelogin()
    {
        return view('login');
    }

    public function homeregister()
    {
        return view('register');
    }
}
