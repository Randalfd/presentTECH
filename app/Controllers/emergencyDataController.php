<?php

namespace App\Controllers;
use App\Models\EmergencyDataModel;

class EmergencyDataController extends BaseController
{
  private $emergencyDataModel;
  public function __construct()
  {
      $this->emergencyDataModel = new EmergencyDataModel();
  }

  public function index()
  {
      return view('emergencyData/index');
  }
}