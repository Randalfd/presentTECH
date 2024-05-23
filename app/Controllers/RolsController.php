<?php

namespace App\Controllers;
use App\Models\RolsModel;

class RolsController extends BaseController
{
  private $rolsModel;
  public function __construct()
  {
      $this->rolsModel = new RolsModel();
  }

  public function index()
  {
      return view('rols/index');
  }
}