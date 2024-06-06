<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('header');
		echo view('home');
		echo view('footer');
	}

	public function logohome()
	{
		echo view('home');
		echo view('footer');
	}

	public function home_login()
	{
		echo view('login');
	}

	public function home_register()
	{
		echo view('register');
	}

<<<<<<< HEAD
    public function after_login()
    {
        return view('loginhome');
    }

    

    public function admis()
    {
        return view('administration');
    }
=======
	public function after_login()
	{
		echo view('header');
		echo view('loginhome');
		echo view('footer');
	}
>>>>>>> 700345297c0561cff6de78131e0a7e83cdad462e
}
