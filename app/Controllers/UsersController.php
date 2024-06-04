<?php

namespace App\Controllers;
use App\Models\UsersModel;

class UsersController extends BaseController
{
  private $usersModel;
  public function __construct()
  {
      $this->usersModel = new UsersModel();
  }

  public function index()
  {
      return view('users/index');
  }
}