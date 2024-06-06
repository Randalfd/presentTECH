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

<<<<<<< HEAD
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
=======
  public function searchUsers(){

    $search = $this->request->getPost('search');
    $users = $this->usersModel->searchUsers($search);
    return view('users/', ['users' => $users]);
  }

}
>>>>>>> 700345297c0561cff6de78131e0a7e83cdad462e
