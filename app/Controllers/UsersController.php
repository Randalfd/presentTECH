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

  public function search()
  {
    $search = $this->request->getGet('search');
    $users = $this->usersModel->searchUsers($search);
    return view('search_results', ['users' => $users]);
  }

  public function showUserProfile()
  {
    $user = session()->get('user_data');
    return view('profile', ['user' => $user]);
  }
}