<?php

namespace App\Controllers;
use App\Controllers\AdressesController;

class LocationsController extends BaseController
{
  private $adressesController;
  public function __construct()
  {
      $this->adressesController = new AdressesController();
  }
  public function index()
  {
      return view('locations/index');
  }
}
