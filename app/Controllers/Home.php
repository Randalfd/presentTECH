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
=======
  
  public function after_login()
>>>>>>> c4fe78ecfc8ede58b5be919819882cfc53f9100b
	{
		echo view('header');
		echo view('loginhome');
		echo view('footer');
<<<<<<< HEAD
	}
>>>>>>> 700345297c0561cff6de78131e0a7e83cdad462e
=======
  }

  public function admis()
  {
    return view('administration');
  }
>>>>>>> c4fe78ecfc8ede58b5be919819882cfc53f9100b
}
