<?php

namespace App\Controllers;
use App\Models\SchoolsModel;

class SchoolsController extends BaseController
{
  private $schoolsModel;
  public function __construct()
  {
      $this->schoolsModel = new SchoolsModel();
  }

  public function index()
  {
      return view('schools/index');
  }
}