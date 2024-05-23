<?php

namespace App\Controllers;
use App\Models\SchoolsModel;
use App\Models\AdressesModel;
use App\Models\CitiesModel;

class SchoolsController extends BaseController
{
  private $addressModel;
  private $citiesModel;
  private $schoolsModel;
  public function __construct()
  {
      $this->schoolsModel = new SchoolsModel();
      $this->addressModel = new AdressesModel(); 
      $this->citiesModel = new CitiesModel(); 
  }

  public function index()
  {
      return view('schools/index');
  }

  public function school_register($school){
  
    
  }


}