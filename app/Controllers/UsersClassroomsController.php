<?php

namespace App\Controllers;
use App\Models\UsersClassroomsModel;

class UsersClassroomsController extends BaseController
{
  private $usersClassroomsModel;
  public function __construct()
  {
      $this->usersClassroomsModel = new UsersClassroomsModel();
  }

  public function index()
  {
      return view('users_classrooms/index');
  }
}