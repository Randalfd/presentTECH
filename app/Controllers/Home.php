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

	public function after_login()
	{
		echo view('header');
		echo view('loginhome');
		echo view('footer');
	}
}
