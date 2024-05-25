<?php

namespace App\Controllers;
use App\Models\ClassroomsModel;

class ClassroomsController extends BaseController
{
  private $classroomsModel;
  public function __construct()
  {
      $this->classroomsModel = new ClassroomsModel();
  }

  public function index()
  {
      return view('classrooms/index');
  }
}