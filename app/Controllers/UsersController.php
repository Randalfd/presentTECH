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

  public function searchUsers(){

    $search = $this->request->getPost('search');
    $users = $this->usersModel->searchUsers($search);
    return view('users/', ['users' => $users]);
  }

}
