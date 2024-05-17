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

  public function Register($data)
  {
      return $this->db->table('users')->insert($data);
  }
}